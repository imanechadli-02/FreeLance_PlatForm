<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Tasks - FreelancePro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .modal-gradient {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        }
        
        .modal-shadow {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .input-focus {
            transition: all 0.2s ease-in-out;
        }
        
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            border-color: #6366f1;
        }
        
        .priority-low {
            background-color: #f0fdf4;
            color: #16a34a;
        }
        
        .priority-medium {
            background-color: #fff7ed;
            color: #ea580c;
        }
        
        .priority-high {
            background-color: #fef2f2;
            color: #dc2626;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg">
        <div class="flex flex-col h-full">
            <!-- Logo -->
            <div class="p-6">
                <div class="text-2xl font-bold gradient-text">FreelancePro</div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 space-y-2">
                <a href="{{ route('developer.dashboard') }}" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                <div>
                    <button id="projectsBtn" class="w-full flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg ">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2M7 7h10"/>
                        </svg>
                        My Projects
                        <svg id="projectsArrow" class="w-4 h-4 ml-2 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="projectsList" class="hidden pl-12 space-y-1">
                        @forelse($projects as $sidebarProject)
                            <a href="{{ route('developer.tasks', $sidebarProject) }}" class="block py-2 text-base font-semibold text-gray-600 hover:text-indigo-600">
                                {{ $sidebarProject->title }}
                            </a>
                        @empty
                            <div class="py-2 text-sm text-gray-500">
                                No active projects
                            </div>
                        @endforelse
                    </div>
                </div>
                <a href="{{ route('developer.tasks') }}" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Tasks
                </a>
                <a href="/developer/messages" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                    Messages
                </a>
                <a href="/developer/settings" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Settings
                </a>
            </nav>

            <!-- User Profile -->
            <div class="p-4 border-t">
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Developer" 
                         class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <div class="font-medium">{{ auth()->user()->name }}</div>
                        <div class="text-sm text-gray-500">Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-8">
        @if(isset($project))
        <!-- Project Header -->
        <div class="bg-white rounded-2xl shadow-sm p-6 mb-8" data-aos="fade-up">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">{{ $project->title }}</h1>
                    <p class="text-gray-600 mt-1">{{ $project->description }}</p>
                </div>
                <div class="mt-4 md:mt-0 flex items-center space-x-4">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($project->client->name) }}&background=6366f1&color=fff" 
                             alt="{{ $project->client->name }}" 
                             class="w-8 h-8 rounded-full mr-2">
                        <div>
                            <div class="text-sm font-medium">{{ $project->client->name }}</div>
                            <div class="text-xs text-gray-500">Client</div>
                        </div>
                    </div>
                    <div class="text-sm font-medium text-indigo-600">${{ number_format($project->budget, 2) }}</div>
                </div>
            </div>
            
            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="flex items-center space-x-2 p-3 bg-gray-50 rounded-lg">
                    <div class="p-2 bg-indigo-100 rounded-lg">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Deadline</p>
                        <p class="text-sm font-medium text-gray-900">{{ $project->deadline->format('F d, Y') }}</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 p-3 bg-gray-50 rounded-lg">
                    <div class="p-2 bg-green-100 rounded-lg">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Tasks</p>
                        <p class="text-sm font-medium text-gray-900">{{ isset($project) && $project->tasks ? $project->tasks->count() : 0 }} Total</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 p-3 bg-gray-50 rounded-lg">
                    <div class="p-2 bg-yellow-100 rounded-lg">
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Status</p>
                        <p class="text-sm font-medium text-gray-900">{{ ucfirst(str_replace('_', ' ', $project->status)) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kanban Board -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- To Do Column -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden" data-aos="fade-up">
                <div class="p-4 bg-gray-50 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-800">To Do</h2>
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs font-medium bg-gray-200 text-gray-700 rounded-full">
                                {{ isset($project) && $project->tasks ? $project->tasks->where('status', 'pending')->count() : 0 }}
                            </span>
                            <button onclick="openAddTaskModal('pending')" class="p-1 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4 space-y-4">
                    @forelse(isset($project) && $project->tasks ? $project->tasks->where('status', 'pending') : collect([]) as $task)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                        <div class="p-4">
                            <div class="flex items-start justify-between">
                                <h3 class="text-sm font-medium text-gray-900">{{ $task->title }}</h3>
                                <span class="px-2 py-1 text-xs font-medium 
                                    @if($task->priority == 'low') bg-green-100 text-green-800
                                    @elseif($task->priority == 'medium') bg-yellow-100 text-yellow-800
                                    @else bg-red-100 text-red-800
                                    @endif rounded-full">
                                    {{ ucfirst($task->priority) }}
                                </span>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">{{ $task->description }}</p>
                            <div class="mt-3 flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-xs text-gray-500">{{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') : 'No due date' }}</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <select onchange="updateTaskStatus({{ $task->id }}, this.value)" class="text-xs border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>To Do</option>
                                        <option value="in_progress" {{ $task->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>Done</option>
                                    </select>
                                    <button class="text-xs text-indigo-600 hover:text-indigo-800">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-4 text-gray-500 text-sm">
                        No tasks in this column
                    </div>
                    @endforelse
                </div>
            </div>
            
            <!-- In Progress Column -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-gray-50 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-800">In Progress</h2>
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs font-medium bg-gray-200 text-gray-700 rounded-full">
                                {{ isset($project) && $project->tasks ? $project->tasks->where('status', 'in_progress')->count() : 0 }}
                            </span>
                            <button onclick="openAddTaskModal('in_progress')" class="p-1 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4 space-y-4">
                    @forelse(isset($project) && $project->tasks ? $project->tasks->where('status', 'in_progress') : collect([]) as $task)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                        <div class="p-4">
                            <div class="flex items-start justify-between">
                                <h3 class="text-sm font-medium text-gray-900">{{ $task->title }}</h3>
                                <span class="px-2 py-1 text-xs font-medium 
                                    @if($task->priority == 'low') bg-green-100 text-green-800
                                    @elseif($task->priority == 'medium') bg-yellow-100 text-yellow-800
                                    @else bg-red-100 text-red-800
                                    @endif rounded-full">
                                    {{ ucfirst($task->priority) }}
                                </span>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">{{ $task->description }}</p>
                            <div class="mt-3 flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-xs text-gray-500">{{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') : 'No due date' }}</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <select onchange="updateTaskStatus({{ $task->id }}, this.value)" class="text-xs border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>To Do</option>
                                        <option value="in_progress" {{ $task->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>Done</option>
                                    </select>
                                    <button class="text-xs text-indigo-600 hover:text-indigo-800">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-4 text-gray-500 text-sm">
                        No tasks in this column
                    </div>
                    @endforelse
                </div>
            </div>
            
            <!-- Done Column -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 bg-gray-50 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-800">Done</h2>
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs font-medium bg-gray-200 text-gray-700 rounded-full">
                                {{ isset($project) && $project->tasks ? $project->tasks->where('status', 'completed')->count() : 0 }}
                            </span>
                            <button onclick="openAddTaskModal('completed')" class="p-1 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4 space-y-4">
                    @forelse(isset($project) && $project->tasks ? $project->tasks->where('status', 'completed') : collect([]) as $task)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                        <div class="p-4">
                            <div class="flex items-start justify-between">
                                <h3 class="text-sm font-medium text-gray-900">{{ $task->title }}</h3>
                                <span class="px-2 py-1 text-xs font-medium 
                                    @if($task->priority == 'low') bg-green-100 text-green-800
                                    @elseif($task->priority == 'medium') bg-yellow-100 text-yellow-800
                                    @else bg-red-100 text-red-800
                                    @endif rounded-full">
                                    {{ ucfirst($task->priority) }}
                                </span>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">{{ $task->description }}</p>
                            <div class="mt-3 flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-xs text-gray-500">{{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') : 'No due date' }}</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <select onchange="updateTaskStatus({{ $task->id }}, this.value)" class="text-xs border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>To Do</option>
                                        <option value="in_progress" {{ $task->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>Done</option>
                                    </select>
                                    <button class="text-xs text-indigo-600 hover:text-indigo-800">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-4 text-gray-500 text-sm">
                        No tasks in this column
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
        @else
        <!-- No Project Selected -->
        <div class="bg-white rounded-2xl shadow-sm p-6 mb-8" data-aos="fade-up">
            <div class="text-center py-8">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">No Project Selected</h2>
                <p class="text-gray-600">Please select a project from the sidebar to view its tasks.</p>
            </div>
        </div>
        @endif
    </main>

    <!-- Add Task Modal -->
    <div id="addTaskModal" class="fixed inset-0 bg-gray-900/75 backdrop-blur-sm hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-6 max-w-2xl w-full">
            <div class="bg-white rounded-2xl modal-shadow overflow-hidden">
                <!-- Modal Header -->
                <div class="px-6 py-4 modal-gradient">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-white">Add New Task</h3>
                        <button onclick="closeAddTaskModal()" class="text-white/80 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Modal Body -->
                <div class="p-6">
                    <form id="addTaskForm" class="space-y-6">
                        <input type="hidden" id="taskStatus" name="status">
                        
                        <!-- Title Field -->
                        <div class="space-y-2">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" id="title" name="title" 
                                   class="block w-full rounded-lg border-gray-200 input-focus focus:ring-2 focus:ring-indigo-500 sm:text-sm"
                                   placeholder="Enter task title">
                        </div>

                        <!-- Description Field -->
                        <div class="space-y-2">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="3" 
                                      class="block w-full rounded-lg border-gray-200 input-focus focus:ring-2 focus:ring-indigo-500 sm:text-sm"
                                      placeholder="Enter task description"></textarea>
                        </div>

                        <!-- Priority and Due Date Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Priority Field -->
                            <div class="space-y-2">
                                <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                                <select id="priority" name="priority" 
                                        class="block w-full rounded-lg border-gray-200 input-focus focus:ring-2 focus:ring-indigo-500 sm:text-sm">
                                    <option value="low" class="priority-low">Low Priority</option>
                                    <option value="medium" class="priority-medium">Medium Priority</option>
                                    <option value="high" class="priority-high">High Priority</option>
                                </select>
                            </div>

                            <!-- Due Date Field -->
                            <div class="space-y-2">
                                <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
                                <input type="date" id="due_date" name="due_date" 
                                       class="block w-full rounded-lg border-gray-200 input-focus focus:ring-2 focus:ring-indigo-500 sm:text-sm"
                                       value="{{ old('due_date') }}"
                                       min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeAddTaskModal()" 
                                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" form="addTaskForm"
                                class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                            Add Task
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        document.addEventListener('DOMContentLoaded', function() {
            const projectsBtn = document.getElementById('projectsBtn');
            const projectsList = document.getElementById('projectsList');
            const projectsArrow = document.getElementById('projectsArrow');
            
            projectsBtn.addEventListener('click', function() {
                projectsList.classList.toggle('hidden');
                projectsArrow.classList.toggle('rotate-180');
            });

            // Add Task Form Submission
            const addTaskForm = document.getElementById('addTaskForm');
            addTaskForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(addTaskForm);
                const taskData = {
                    title: formData.get('title'),
                    description: formData.get('description'),
                    priority: formData.get('priority'),
                    due_date: formData.get('due_date'),
                    status: formData.get('status'),
                    project_id: {{ isset($project) ? $project->id : 'null' }}
                };

                fetch('{{ route("developer.tasks.store") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(taskData)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        window.location.reload();
                    } else {
                        alert('Error creating task: ' + (data.message || 'Unknown error occurred'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error creating task. Please try again.');
                });
            });
        });

        function updateTaskStatus(taskId, newStatus) {
            fetch(`/developer/tasks/${taskId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    status: newStatus
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    window.location.reload();
                } else {
                    alert('Error updating task status: ' + (data.message || 'Unknown error occurred'));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error updating task status. Please try again.');
            });
        }

        function openAddTaskModal(status) {
            document.getElementById('taskStatus').value = status;
            document.getElementById('addTaskModal').classList.remove('hidden');
            document.getElementById('addTaskForm').reset();
        }

        function closeAddTaskModal() {
            document.getElementById('addTaskModal').classList.add('hidden');
            document.getElementById('addTaskForm').reset();
        }
    </script>
</body>
</html> 