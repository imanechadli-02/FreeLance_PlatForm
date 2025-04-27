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
} 