<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    /**
     * Display a listing of all tasks.
     */
    public function index()
    {
        $projects = Project::where('developer_id', auth()->id())->get();
        return view('developer.tasks', compact('projects'));
    }

    /**
     * Display the tasks for a specific project.
     */
    public function show(Project $project)
    {
        $tasks = $project->tasks;
        return view('developer.project_tasks', compact('project', 'tasks'));
    }
} 