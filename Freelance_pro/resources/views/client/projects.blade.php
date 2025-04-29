<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Projects - FreelancePro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .gradient-text {
            background: linear-gradient(45deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
                <a href="/client/dashboard" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                <a href="/client/projects" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Projects
                </a>
                <a href="/client/quotes" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Quote Requests
                </a>
                <a href="/client/messages" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                    Messages
                </a>
                <a href="/client/settings" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
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
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Client" 
                         class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <div class="font-medium">Sarah Johnson</div>
                        <div class="text-sm text-gray-500">Client</div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">My Projects</h1>
                <p class="text-gray-600">Track and manage all your projects in one place</p>
            </div>
            <button onclick="openModal()" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                New Project
            </button>
        </div>

        <!-- Messages -->
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-md">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <div class="text-sm text-green-600">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-md">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-red-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="text-sm text-red-600">
                        {{ session('error') }}
                    </div>
                </div>
            </div>
        @endif

        <!-- Filters -->
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
            <div class="flex flex-wrap gap-4">
                <div class="flex-1 min-w-[200px]">
                    <input type="text" 
                           placeholder="Search projects..." 
                           class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <select class="px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="completed">Completed</option>
                    <option value="on-hold">On Hold</option>
                </select>
                <select class="px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="">All Types</option>
                    <option value="web">Web Development</option>
                    <option value="mobile">Mobile App</option>
                    <option value="design">UI/UX Design</option>
                    <option value="marketing">Digital Marketing</option>
                </select>
                <button class="px-4 py-2 text-gray-600 hover:text-indigo-600">
                    Clear Filters
                </button>
            </div>
        </div>

        <!-- Projects List -->
        <div class="space-y-8">
            <!-- Active Projects Section -->
            <div>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Active Projects</h2>
                    <span class="text-sm text-gray-500">{{ $projects->where('status', '!=', 'completed')->count() }} projects</span>
                </div>
                <div class="space-y-6">
                    @forelse($projects->where('status', '!=', 'completed') as $project)
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="p-6">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <div class="flex items-center mb-4">
                                            <h3 class="text-lg font-bold text-gray-800 mr-4">{{ $project->title }}</h3>
                                            <span class="px-3 py-1 text-sm font-medium 
                                                @if($project->status == 'open') text-green-600 bg-green-50
                                                @elseif($project->status == 'in_progress') text-blue-600 bg-blue-50
                                                @elseif($project->status == 'completed') text-purple-600 bg-purple-50
                                                @else text-yellow-600 bg-yellow-50
                                                @endif rounded-full">
                                                {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                                            </span>
                                        </div>
                                        <p class="text-gray-600 mb-6">{{ $project->description }}</p>
                                        
                                        <!-- Project Details -->
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                            <div class="flex items-center">
                                                @if($project->developer)
                                                <img src="https://ui-avatars.com/api/?name={{ urlencode($project->developer->name) }}&background=6366f1&color=fff" 
                                                     alt="{{ $project->developer->name }}" 
                                                     class="w-8 h-8 rounded-full mr-3">
                                                <div>
                                                    <div class="text-sm font-medium text-gray-800">{{ $project->developer->name }}</div>
                                                    <div class="text-xs text-gray-500">Developer</div>
                                                </div>
                                                @else
                                                <div>
                                                    <div class="text-sm font-medium text-gray-800">No developer assigned</div>
                                                </div>
                                                @endif
                                            </div>
                                            <div>
                                                <div class="text-sm text-gray-500">Due Date</div>
                                                <div class="font-medium text-gray-800">{{ $project->deadline->format('F j, Y') }}</div>
                                            </div>
                                            <div>
                                                <div class="text-sm text-gray-500">Budget</div>
                                                <div class="font-medium text-gray-800">${{ number_format($project->budget, 2) }}</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Tasks Section -->
                                        <div class="mt-4">
                                            <button onclick="toggleTasks('{{ $project->id }}')" class="flex items-center text-indigo-600 hover:text-indigo-700">
                                                <svg id="icon-{{ $project->id }}" class="w-5 h-5 mr-2 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                                <span>Tasks ({{ $project->tasks->count() }})</span>
                                            </button>
                                            
                                            <div id="tasks-{{ $project->id }}" class="hidden mt-4 border-t pt-4">
                                                @if($project->tasks->count() > 0)
                                                    <div class="space-y-4">
                                                        @foreach($project->tasks as $task)
                                                            <div class="bg-gray-50 rounded-lg p-4">
                                                                <div class="flex justify-between items-start">
                                                                    <div>
                                                                        <h4 class="font-medium text-gray-800">{{ $task->title }}</h4>
                                                                        <p class="text-sm text-gray-600 mt-1">{{ $task->description }}</p>
                                                                    </div>
                                                                    <span class="px-2 py-1 text-xs font-medium 
                                                                        @if($task->status == 'pending') text-yellow-600 bg-yellow-50
                                                                        @elseif($task->status == 'in_progress') text-blue-600 bg-blue-50
                                                                        @else text-green-600 bg-green-50
                                                                        @endif rounded-full">
                                                                        {{ ucfirst($task->status) }}
                                                                    </span>
                                                                </div>
                                                                <div class="mt-3 flex justify-between items-center text-xs text-gray-500">
                                                                    <div>
                                                                        <span class="font-medium">Priority:</span> 
                                                                        <span class="
                                                                            @if($task->priority == 'low') text-green-600
                                                                            @elseif($task->priority == 'medium') text-yellow-600
                                                                            @else text-red-600
                                                                            @endif">
                                                                            {{ ucfirst($task->priority) }}
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="font-medium">Due:</span> {{ $task->due_date->format('M j, Y') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <p class="text-gray-500 text-sm">No tasks have been created for this project yet.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-6">
                                        <button class="px-4 py-2 text-indigo-600 hover:text-indigo-700">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                            <p class="text-gray-500">No active projects found.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Completed Projects Section -->
            <div>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Completed Projects</h2>
                    <span class="text-sm text-gray-500">{{ $projects->where('status', 'completed')->count() }} projects</span>
                </div>
                <div class="space-y-6">
                    @forelse($projects->where('status', 'completed') as $project)
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="p-6">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <div class="flex items-center mb-4">
                                            <h3 class="text-lg font-bold text-gray-800 mr-4">{{ $project->title }}</h3>
                                            <span class="px-3 py-1 text-sm font-medium 
                                                @if($project->status == 'open') text-green-600 bg-green-50
                                                @elseif($project->status == 'in_progress') text-blue-600 bg-blue-50
                                                @elseif($project->status == 'completed') text-purple-600 bg-purple-50
                                                @else text-yellow-600 bg-yellow-50
                                                @endif rounded-full">
                                                {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                                            </span>
                                        </div>
                                        <p class="text-gray-600 mb-6">{{ $project->description }}</p>
                                        
                                        <!-- Project Details -->
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                            <div class="flex items-center">
                                                @if($project->developer)
                                                <img src="https://ui-avatars.com/api/?name={{ urlencode($project->developer->name) }}&background=6366f1&color=fff" 
                                                     alt="{{ $project->developer->name }}" 
                                                     class="w-8 h-8 rounded-full mr-3">
                                                <div>
                                                    <div class="text-sm font-medium text-gray-800">{{ $project->developer->name }}</div>
                                                    <div class="text-xs text-gray-500">Developer</div>
                                                </div>
                                                @else
                                                <div>
                                                    <div class="text-sm font-medium text-gray-800">No developer assigned</div>
                                                </div>
                                                @endif
                                            </div>
                                            <div>
                                                <div class="text-sm text-gray-500">Due Date</div>
                                                <div class="font-medium text-gray-800">{{ $project->deadline->format('F j, Y') }}</div>
                                            </div>
                                            <div>
                                                <div class="text-sm text-gray-500">Budget</div>
                                                <div class="font-medium text-gray-800">${{ number_format($project->budget, 2) }}</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Tasks Section -->
                                        <div class="mt-4">
                                            <button onclick="toggleTasks('{{ $project->id }}')" class="flex items-center text-indigo-600 hover:text-indigo-700">
                                                <svg id="icon-{{ $project->id }}" class="w-5 h-5 mr-2 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                                <span>Tasks ({{ $project->tasks->count() }})</span>
                                            </button>
                                            
                                            <div id="tasks-{{ $project->id }}" class="hidden mt-4 border-t pt-4">
                                                @if($project->tasks->count() > 0)
                                                    <div class="space-y-4">
                                                        @foreach($project->tasks as $task)
                                                            <div class="bg-gray-50 rounded-lg p-4">
                                                                <div class="flex justify-between items-start">
                                                                    <div>
                                                                        <h4 class="font-medium text-gray-800">{{ $task->title }}</h4>
                                                                        <p class="text-sm text-gray-600 mt-1">{{ $task->description }}</p>
                                                                    </div>
                                                                    <span class="px-2 py-1 text-xs font-medium 
                                                                        @if($task->status == 'pending') text-yellow-600 bg-yellow-50
                                                                        @elseif($task->status == 'in_progress') text-blue-600 bg-blue-50
                                                                        @else text-green-600 bg-green-50
                                                                        @endif rounded-full">
                                                                        {{ ucfirst($task->status) }}
                                                                    </span>
                                                                </div>
                                                                <div class="mt-3 flex justify-between items-center text-xs text-gray-500">
                                                                    <div>
                                                                        <span class="font-medium">Priority:</span> 
                                                                        <span class="
                                                                            @if($task->priority == 'low') text-green-600
                                                                            @elseif($task->priority == 'medium') text-yellow-600
                                                                            @else text-red-600
                                                                            @endif">
                                                                            {{ ucfirst($task->priority) }}
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="font-medium">Due:</span> {{ $task->due_date->format('M j, Y') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <p class="text-gray-500 text-sm">No tasks have been created for this project yet.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-6">
                                        <button class="px-4 py-2 text-indigo-600 hover:text-indigo-700">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                            <p class="text-gray-500">No completed projects found.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </main>

    <!-- New Project Modal -->
    <div id="projectModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-[600px] shadow-lg rounded-2xl bg-white">
            <div class="mt-3">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-gray-800">Create New Project</h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-md">
                        <div class="text-sm text-red-600">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form action="{{ route('projects.store') }}" method="POST" onsubmit="handleSubmit(event)" class="space-y-4">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Project Title</label>
                        <input type="text" name="title" id="title" required
                            value="{{ old('title') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label for="service_id" class="block text-sm font-medium text-gray-700">Service Type</label>
                        <select name="service_id" id="service_id" required onchange="updateServicePrice(this)"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="">Select a service</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" data-price="{{ $service->price }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                                    {{ $service->name }} - ${{ number_format($service->price, 2) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="service_price" class="block text-sm font-medium text-gray-700">Service Price</label>
                        <input type="text" id="service_price" readonly
                            class="mt-1 block w-full rounded-md border-gray-300 bg-gray-50 shadow-sm">
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Project Description</label>
                        <textarea name="description" id="description" rows="4" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>
                    </div>

                    <div>
                        <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
                        <input type="date" name="deadline" id="deadline" required
                            value="{{ old('deadline') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label for="skills_required" class="block text-sm font-medium text-gray-700">Required Skills</label>
                        <input type="text" name="skills_required" id="skills_required" placeholder="e.g., PHP, Laravel, React"
                            value="{{ old('skills_required') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <input type="hidden" name="budget" id="budget">

                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeModal()" 
                            class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                            Cancel
                        </button>
                        <button type="submit" 
                            class="px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Create Project
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        function openModal() {
            document.getElementById('projectModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('projectModal').classList.add('hidden');
        }

        function updateServicePrice(select) {
            const selectedOption = select.options[select.selectedIndex];
            const price = selectedOption.getAttribute('data-price');
            const priceInput = document.getElementById('service_price');
            const budgetInput = document.getElementById('budget');
            
            if (price) {
                priceInput.value = '$' + parseFloat(price).toFixed(2);
                budgetInput.value = price;
            } else {
                priceInput.value = '';
                budgetInput.value = '';
            }
        }

        function handleSubmit(event) {
            // Remove the event.preventDefault() to allow the form to submit normally
            // The form will be submitted to the server and the controller will handle the redirect
        }

        // Close modal when clicking outside
        document.getElementById('projectModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
        
        // Toggle tasks section
        function toggleTasks(projectId) {
            const tasksSection = document.getElementById(`tasks-${projectId}`);
            const icon = document.getElementById(`icon-${projectId}`);
            
            if (tasksSection.classList.contains('hidden')) {
                tasksSection.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                tasksSection.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
</body>
</html> 