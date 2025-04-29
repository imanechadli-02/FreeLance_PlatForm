<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\ProfileController;
use App\Http\Middleware\ApprovedMiddleware;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTaskController;
use App\Http\Controllers\TaskController;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Registration Routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register.post');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Profile Routes
    Route::get('/profile', function () {
        return view('client.profile');
    })->name('profile');
    Route::put('/profile', [LoginController::class, 'updateProfile'])->name('profile.update');

    // Dashboard Routes
    Route::get('/client/dashboard', function () {
        $projects = auth()->user()->projects()->latest()->get();
        $services = \App\Models\Service::all();
        return view('client.dashboard', compact('projects', 'services'));
    })->name('client.dashboard');
    Route::get('/developer/dashboard', function () {
        $projects = \App\Models\Project::latest()->get();
        return view('developer.dashboard', compact('projects'));
    })->name('developer.dashboard');
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Client Projects Route
    Route::get('/client/projects', function () {
        $projects = auth()->user()->projects()->with('tasks')->latest()->get();
        $services = \App\Models\Service::all();
        return view('client.projects', compact('projects', 'services'));
    })->name('client.projects');
    Route::post('/client/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/client/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/client/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/client/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    // User Management Routes
    Route::prefix('admin')->group(function () {
        Route::get('/users', [AdminController::class, 'index'])->name('users.index');
        Route::post('/users/{user}/approve', [AdminController::class, 'approve'])->name('users.approve');
        Route::delete('/users/{user}', [AdminController::class, 'delete'])->name('users.delete');

        // Admin Profile Routes
        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('admin.profile');
        
        Route::put('/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
        Route::put('/profile/password', [AdminController::class, 'updatePassword'])->name('admin.password.update');

        // Admin Projects Route
        Route::get('/projects', function () {
            $projects = \App\Models\Project::with(['client', 'developer', 'service'])->latest()->get();
            return view('admin.projects', compact('projects'));
        })->name('admin.projects');
        
        // Admin Project Show Route
        Route::get('/projects/{project}', function (\App\Models\Project $project) {
            return view('admin.project-details', compact('project'));
        })->name('admin.projects.show');
        
        // Admin Project Details AJAX Route
        Route::get('/projects/{project}/details', function (\App\Models\Project $project) {
            $project->load(['client', 'developer', 'service', 'tasks']);
            
            // Format dates for JSON response
            $project->deadline = $project->deadline ? $project->deadline->format('M d, Y') : null;
            
            $tasks = $project->tasks->map(function($task) {
                return [
                    'id' => $task->id,
                    'title' => $task->title,
                    'description' => $task->description,
                    'status' => $task->status,
                    'due_date' => $task->due_date ? $task->due_date->format('M d, Y') : null,
                    'completed_at' => $task->completed_at ? $task->completed_at->format('M d, Y') : null,
                ];
            });
            
            return response()->json([
                'project' => $project,
                'tasks' => $tasks
            ]);
        })->name('admin.projects.details');
        
        // Admin Project Delete Route
        Route::delete('/projects/{project}', function (\App\Models\Project $project) {
            $project->delete();
            return redirect()->route('admin.projects')->with('success', 'Project deleted successfully');
        })->name('admin.projects.delete');
    });

    // Service Management Routes
    Route::prefix('admin')->group(function () {
        Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
        Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
        Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
        Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
        Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
        Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');
    });

    // Developer Project Routes
    Route::post('/projects/{project}/apply', [ProjectController::class, 'apply'])->name('projects.apply');

    // Developer Projects Routes
    Route::get('/developer/projects', [ProjectController::class, 'index'])->name('developer.projects.index');

    // Developer Tasks Route
    Route::get('/developer/tasks/{project?}', [ProjectTaskController::class, 'index'])->name('developer.tasks');
    Route::post('/developer/tasks', [TaskController::class, 'store'])->name('developer.tasks.store');
    Route::put('/developer/tasks/{task}', [TaskController::class, 'updateStatus'])->name('developer.tasks.updateStatus');

    // Project Tasks Routes
    Route::get('/projects/{project}/tasks', [ProjectTaskController::class, 'show'])
        ->name('developer.projects.tasks');
});

// Approved User Routes
Route::middleware(['auth', ApprovedMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
