<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        
        // Initialize collections
        $conversations = collect();
        $activeProjects = collect();
        $messages = collect();
        $selectedProject = null;
        $projects = collect();

        try {
            // Get all projects for the sidebar
            $projects = Project::where('developer_id', $user->id)
                ->with(['client', 'tasks', 'messages' => function($query) {
                    $query->orderBy('created_at', 'desc');
                }])
                ->get();

            // Get active projects based on user role
            $activeProjects = $user->role === 'developer' 
                ? Project::where('developer_id', $user->id)
                    ->where('status', '!=', 'completed')
                    ->with(['client', 'tasks', 'messages' => function($query) {
                        $query->orderBy('created_at', 'desc');
                    }])
                    ->get()
                : Project::where('client_id', $user->id)
                    ->with(['developer', 'tasks', 'messages' => function($query) {
                        $query->orderBy('created_at', 'desc');
                    }])
                    ->latest()
                    ->get();

            \Log::info('Active Projects Count: ' . $activeProjects->count());
            \Log::info('Active Projects: ' . $activeProjects->pluck('title')->toJson());

            // Get conversations for the sidebar
            $conversations = collect();
            foreach ($activeProjects as $project) {
                $lastMessage = Message::where('project_id', $project->id)
                    ->where(function($query) use ($user) {
                        $query->where('sender_id', $user->id)
                            ->orWhere('receiver_id', $user->id);
                    })
                    ->with(['sender', 'receiver'])
                    ->latest()
                    ->first();

                if ($lastMessage) {
                    $conversations->put($project->id, collect([$lastMessage]));
                }
            }

            // If there are active projects, select the first one by default
            if ($activeProjects->isNotEmpty()) {
                $selectedProject = $activeProjects->first();
                $messages = Message::where('project_id', $selectedProject->id)
                    ->where(function($query) use ($user) {
                        $query->where('sender_id', $user->id)
                            ->orWhere('receiver_id', $user->id);
                    })
                    ->with(['sender', 'receiver'])
                    ->orderBy('created_at', 'asc')
                    ->get();
            }
        } catch (\Exception $e) {
            \Log::error('Error in MessageController@index: ' . $e->getMessage());
        }

        return view($user->role === 'developer' ? 'developer.messages' : 'client.messages', [
            'conversations' => $conversations,
            'activeProjects' => $activeProjects,
            'selectedProject' => $selectedProject,
            'messages' => $messages,
            'projects' => $projects
        ]);
    }

    public function show(Project $project)
    {
        $user = Auth::user();
        
        // Verify the user has access to this project
        if ($user->role === 'developer' && $project->developer_id !== $user->id) {
            abort(403, 'Unauthorized access.');
        }
        if ($user->role === 'client' && $project->client_id !== $user->id) {
            abort(403, 'Unauthorized access.');
        }

        // Get all messages for this project
        $messages = Message::where('project_id', $project->id)
            ->with(['sender', 'receiver'])
            ->orderBy('created_at', 'asc')
            ->get();

        // Get all projects for the sidebar
        $projects = Project::where('developer_id', $user->id)
            ->with(['client', 'tasks', 'messages' => function($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->get();

        // Get active projects for the sidebar
        $activeProjects = $user->role === 'developer' 
            ? Project::where('developer_id', $user->id)
                ->where('status', '!=', 'completed')
                ->with(['client', 'tasks', 'messages' => function($query) {
                    $query->orderBy('created_at', 'desc');
                }])
                ->get()
            : Project::where('client_id', $user->id)
                ->with(['developer', 'tasks', 'messages' => function($query) {
                    $query->orderBy('created_at', 'desc');
                }])
                ->latest()
                ->get();

        // Get conversations for the sidebar
        $conversations = collect();
        foreach ($activeProjects as $activeProject) {
            $lastMessage = Message::where('project_id', $activeProject->id)
                ->where(function($query) use ($user) {
                    $query->where('sender_id', $user->id)
                        ->orWhere('receiver_id', $user->id);
                })
                ->with(['sender', 'receiver'])
                ->latest()
                ->first();

            if ($lastMessage) {
                $conversations->put($activeProject->id, collect([$lastMessage]));
            }
        }

        return view($user->role === 'developer' ? 'developer.messages' : 'client.messages', [
            'selectedProject' => $project,
            'messages' => $messages,
            'activeProjects' => $activeProjects,
            'conversations' => $conversations,
            'projects' => $projects
        ]);
    }

    public function store(Request $request, Project $project)
    {
        $user = Auth::user();
        
        // Verify the user has access to this project
        if ($user->role === 'developer' && $project->developer_id !== $user->id) {
            abort(403, 'Unauthorized access.');
        }
        if ($user->role === 'client' && $project->client_id !== $user->id) {
            abort(403, 'Unauthorized access.');
        }

        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // Double-check the project exists and belongs to the user
        $validProject = Project::where('id', $project->id)
            ->where(function($query) use ($user) {
                if ($user->role === 'developer') {
                    $query->where('developer_id', $user->id);
                } else {
                    $query->where('client_id', $user->id);
                }
            })
            ->first();

        if (!$validProject) {
            abort(403, 'Invalid project selected.');
        }

        // Determine the receiver based on user role
        $receiverId = $user->role === 'developer' ? $project->client_id : $project->developer_id;

        // Create the message
        Message::create([
            'project_id' => $project->id,
            'sender_id' => $user->id,
            'receiver_id' => $receiverId,
            'message' => $request->message,
        ]);

        // Get the current route name to determine where to redirect
        $currentRoute = $request->route()->getName();
        
        // Redirect based on the current route
        if (str_contains($currentRoute, 'developer')) {
            return redirect()->route('developer.messages.show', $project);
        } else {
            return redirect()->route('client.messages.show', $project);
        }
    }
} 