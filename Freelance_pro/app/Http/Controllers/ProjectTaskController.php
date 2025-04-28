<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectTaskController extends Controller
{
    /**
     * Display a listing of all tasks.
     */
    public function index(Project $project = null)
    {
        // Get all projects for the authenticated developer
        $projects = Project::where('developer_id', auth()->id())->latest()->get();
        
        // Log the projects for debugging
        Log::info('All projects:', $projects->pluck('id', 'title')->toArray());
        
        // If there are no projects, return the view with empty collections
        if ($projects->isEmpty()) {
            return view('developer.tasks', [
                'projects' => collect(),
                'project' => null,
                'tasks' => collect()
            ]);
        }
        
        // If no specific project is provided, use the first project
        if (!$project) {
            $project = $projects->first();
            Log::info('No project provided, using first project:', ['id' => $project->id, 'title' => $project->title]);
        } else {
            // Check if the authenticated user is the developer assigned to this project
            if ($project->developer_id !== auth()->id()) {
                abort(403, 'You do not have permission to view these tasks.');
            }
            Log::info('Project provided:', ['id' => $project->id, 'title' => $project->title]);
        }
        
        // Load tasks for this project
        $project->load('tasks');
        
        // Log the project data being passed to the view
        Log::info('Project data being passed to view:', [
            'id' => $project->id,
            'title' => $project->title,
            'description' => $project->description,
            'task_count' => $project->tasks->count()
        ]);
        
        return view('developer.tasks', compact('project', 'projects'));
    }

    /**
     * Display the tasks for a specific project.
     */
    public function show(Project $project)
    {
        // Check if the authenticated user is the developer assigned to this project
        if ($project->developer_id !== auth()->id()) {
            abort(403, 'You do not have permission to view these tasks.');
        }
        
        // Log the project data for debugging
        Log::info('Show method - Project data:', [
            'id' => $project->id,
            'title' => $project->title,
            'description' => $project->description
        ]);
        
        // Load the project with its tasks
        $project->load('tasks');
        
        // Get all projects for the sidebar
        $projects = Project::where('developer_id', auth()->id())->get();
        
        // Return the tasks view with both the specific project and all projects
        return view('developer.tasks', compact('project', 'projects'));
    }
} 