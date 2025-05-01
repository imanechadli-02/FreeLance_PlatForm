<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Project creation attempt started', [
            'request_data' => $request->all(),
            'user_id' => Auth::id()
        ]);

        try {
            // Validate the request
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'deadline' => 'required|date|after:today',
                'skills_required' => 'required|string',
                'service_id' => 'required|exists:services,id',
            ]);

            Log::info('Validation passed', $validated);

            // Get the service to set the budget
            $service = Service::findOrFail($request->service_id);
            Log::info('Service found', ['service' => $service->toArray()]);

            // Prepare project data
            $projectData = [
                'title' => $validated['title'],
                'description' => $validated['description'],
                'budget' => $service->price,
                'deadline' => $validated['deadline'],
                'skills_required' => $validated['skills_required'],
                'client_id' => Auth::id(),
                'service_id' => $validated['service_id'],
                'status' => 'open',
            ];

            Log::info('Attempting to create project with data', $projectData);

            // Create the project
            $project = Project::create($projectData);

            Log::info('Project created successfully', ['project_id' => $project->id]);

            return redirect()->route('client.projects')
                ->with('success', 'Project "' . $project->title . '" has been created successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed', [
                'errors' => $e->errors(),
                'request_data' => $request->all()
            ]);
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Please correct the errors below.');
        } catch (\Exception $e) {
            Log::error('Project creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create project: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Project $project)
    {
        try {
            // Check if user is authorized to update this project
            if (auth()->user()->role !== 'admin' && $project->client_id !== auth()->id()) {
                return redirect()->back()->with('error', 'Unauthorized action.');
            }

            // Validate the request
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'deadline' => 'required|date|after:today',
                'skills_required' => 'required|string',
                'service_id' => 'required|exists:services,id',
            ]);

            // Get the service to update the budget
            $service = Service::findOrFail($request->service_id);
            
            // Update project data
            $project->update([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'budget' => $service->price,
                'deadline' => $validated['deadline'],
                'skills_required' => $validated['skills_required'],
                'service_id' => $validated['service_id'],
            ]);

            return redirect()->route('client.dashboard')
                ->with('success', 'Project updated successfully.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Please correct the errors below.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'An error occurred while updating the project.');
        }
    }

    public function destroy(Project $project)
    {
        try {
            // Check if user is authorized to delete this project
            if ($project->client_id !== auth()->id()) {
                return redirect()->back()->with('error', 'Unauthorized action.');
            }

            // Delete the project
            $project->delete();

            return redirect()->route('client.dashboard')
                ->with('success', 'Project deleted successfully.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while deleting the project.');
        }
    }

    public function edit(Project $project)
    {
        // Check if user is authorized to edit this project
        if (auth()->user()->role !== 'admin' && $project->client_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        return view('client.projects.edit', compact('project'));
    }

    public function apply(Project $project)
    {
        try {
            Log::info('Developer attempting to apply for project', [
                'project_id' => $project->id,
                'developer_id' => auth()->id(),
                'current_status' => $project->status
            ]);

            // Check if project is open
            if ($project->status !== 'open') {
                Log::warning('Project is not open for applications', [
                    'project_id' => $project->id,
                    'current_status' => $project->status
                ]);
                return redirect()->back()->with('error', 'This project is no longer open for applications.');
            }

            // Check if developer has already applied
            if ($project->developer_id === auth()->id()) {
                Log::warning('Developer has already applied', [
                    'project_id' => $project->id,
                    'developer_id' => auth()->id()
                ]);
                return redirect()->back()->with('error', 'You have already applied for this project.');
            }

            // Update project with developer
            $project->update([
                'developer_id' => auth()->id(),
                'status' => 'in_progress'
            ]);

            Log::info('Project successfully assigned to developer', [
                'project_id' => $project->id,
                'developer_id' => auth()->id(),
                'new_status' => 'in_progress'
            ]);

            return redirect()->route('developer.dashboard')
                ->with('success', 'Successfully applied for the project! You can now start working on it.');

        } catch (\Exception $e) {
            Log::error('Error applying for project', [
                'project_id' => $project->id,
                'developer_id' => auth()->id(),
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while applying for the project: ' . $e->getMessage());
        }
    }

    public function index()
    {
        // Get all projects for the authenticated developer
        $projects = Project::where('developer_id', auth()->id())
            ->with(['client', 'service', 'tasks'])
            ->latest()
            ->get();

        return view('developer.projects', compact('projects'));
    }
} 