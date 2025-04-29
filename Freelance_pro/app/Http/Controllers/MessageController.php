<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Get conversations grouped by project
        $conversations = Message::where(function($query) use ($user) {
            $query->where('sender_id', $user->id)
                  ->orWhere('receiver_id', $user->id);
        })
        ->with(['project', 'project.client', 'project.developer'])
        ->latest()
        ->get()
        ->groupBy('project_id');

        // Get active projects for the current user
        $activeProjects = $user->role === 'developer' 
            ? Project::where('developer_id', $user->id)
                    ->where('status', '!=', 'completed')
                    ->with(['client', 'service', 'tasks'])
                    ->latest()
                    ->get()
            : Project::where('client_id', $user->id)
                    ->where('status', '!=', 'completed')
                    ->with(['developer', 'service', 'tasks'])
                    ->latest()
                    ->get();

        // Initialize empty messages collection for the index view
        $messages = collect();
        $project = null;

        if ($user->role === 'developer') {
            return view('developer.messages', compact('conversations', 'activeProjects', 'messages', 'project'));
        } else {
            return view('client.messages', compact('conversations', 'activeProjects', 'messages', 'project'));
        }
    }

    public function show(Project $project)
    {
        $user = Auth::user();
        
        // Verify the user has access to this project
        if ($user->role === 'developer' && $project->developer_id !== $user->id) {
            abort(403);
        }
        if ($user->role === 'client' && $project->client_id !== $user->id) {
            abort(403);
        }

        // Get all messages for this project
        $messages = Message::where('project_id', $project->id)
            ->with(['sender', 'receiver'])
            ->latest()
            ->get();

        // Get conversations for the sidebar
        $conversations = Message::where(function($query) use ($user) {
            $query->where('sender_id', $user->id)
                  ->orWhere('receiver_id', $user->id);
        })
        ->with(['project', 'project.client', 'project.developer'])
        ->latest()
        ->get()
        ->groupBy('project_id');

        // Get active projects for the current user
        $activeProjects = $user->role === 'developer' 
            ? Project::where('developer_id', $user->id)
                    ->where('status', '!=', 'completed')
                    ->with(['client', 'service', 'tasks'])
                    ->latest()
                    ->get()
            : Project::where('client_id', $user->id)
                    ->where('status', '!=', 'completed')
                    ->with(['developer', 'service', 'tasks'])
                    ->latest()
                    ->get();

        if ($user->role === 'developer') {
            return view('developer.messages', compact('conversations', 'messages', 'project', 'activeProjects'));
        } else {
            return view('client.messages', compact('conversations', 'messages', 'project', 'activeProjects'));
        }
    }

    public function store(Request $request, Project $project)
    {
        $user = Auth::user();
        
        // Verify the user has access to this project
        if ($user->role === 'developer' && $project->developer_id !== $user->id) {
            abort(403);
        }
        if ($user->role === 'client' && $project->client_id !== $user->id) {
            abort(403);
        }

        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // Determine the receiver based on user role
        $receiverId = $user->role === 'developer' ? $project->client_id : $project->developer_id;

        $message = Message::create([
            'sender_id' => $user->id,
            'receiver_id' => $receiverId,
            'project_id' => $project->id,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
} 