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
                    <span class="text-sm text-gray-500">3 projects</span>
                </div>
                <div class="space-y-6">
                    <!-- Project 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center mb-4">
                                        <h3 class="text-lg font-bold text-gray-800 mr-4">E-commerce Website Redesign</h3>
                                        <span class="px-3 py-1 text-sm font-medium text-green-600 bg-green-50 rounded-full">
                                            In Progress
                                        </span>
                                    </div>
                                    <p class="text-gray-600 mb-6">Modernizing the online shopping experience with improved UI/UX and performance optimizations.</p>
                                    
                                    <!-- Timeline -->
                                    <div class="relative mb-6">
                                        <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-gray-200"></div>
                                        <div class="space-y-6">
                                            <!-- Timeline Item 1 -->
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-indigo-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">Project Initiation</h4>
                                                        <p class="text-sm text-gray-500">Requirements gathering and planning</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">Completed</span>
                                                </div>
                                            </div>
                                            <!-- Timeline Item 2 -->
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-indigo-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">Design Phase</h4>
                                                        <p class="text-sm text-gray-500">UI/UX design and prototyping</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">Completed</span>
                                                </div>
                                            </div>
                                            <!-- Timeline Item 3 -->
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-indigo-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">Development</h4>
                                                        <p class="text-sm text-gray-500">Frontend and backend implementation</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">In Progress</span>
                                                </div>
                                            </div>
                                            <!-- Timeline Item 4 -->
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-gray-300 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-400">Testing & Launch</h4>
                                                        <p class="text-sm text-gray-400">Quality assurance and deployment</p>
                                                    </div>
                                                    <span class="text-sm text-gray-400">Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Details -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                                 alt="Developer" 
                                                 class="w-8 h-8 rounded-full mr-3">
                                            <div>
                                                <div class="text-sm font-medium text-gray-800">John Smith</div>
                                                <div class="text-xs text-gray-500">Lead Developer</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-sm text-gray-500">Due Date</div>
                                            <div class="font-medium text-gray-800">March 30, 2024</div>
                                        </div>
                                        <div>
                                            <div class="text-sm text-gray-500">Budget</div>
                                            <div class="font-medium text-gray-800">$12,500</div>
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

                    <!-- Project 2 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center mb-4">
                                        <h3 class="text-lg font-bold text-gray-800 mr-4">Mobile App UI Design</h3>
                                        <span class="px-3 py-1 text-sm font-medium text-blue-600 bg-blue-50 rounded-full">
                                            Review Phase
                                        </span>
                                    </div>
                                    <p class="text-gray-600 mb-6">Creating a modern and intuitive user interface for the fitness tracking mobile app.</p>
                                    
                                    <!-- Timeline -->
                                    <div class="relative mb-6">
                                        <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-gray-200"></div>
                                        <div class="space-y-6">
                                            <!-- Timeline Items -->
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-indigo-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">Research & Analysis</h4>
                                                        <p class="text-sm text-gray-500">User research and market analysis</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">Completed</span>
                                                </div>
                                            </div>
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-indigo-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">Wireframing</h4>
                                                        <p class="text-sm text-gray-500">Initial layout and structure</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">Completed</span>
                                                </div>
                                            </div>
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-indigo-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">UI Design</h4>
                                                        <p class="text-sm text-gray-500">Visual design and prototyping</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">In Progress</span>
                                                </div>
                                            </div>
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-gray-300 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-400">Final Review</h4>
                                                        <p class="text-sm text-gray-400">Client approval and handoff</p>
                                                    </div>
                                                    <span class="text-sm text-gray-400">Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Details -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                                 alt="Designer" 
                                                 class="w-8 h-8 rounded-full mr-3">
                                            <div>
                                                <div class="text-sm font-medium text-gray-800">Sarah Wilson</div>
                                                <div class="text-xs text-gray-500">UI/UX Designer</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-sm text-gray-500">Due Date</div>
                                            <div class="font-medium text-gray-800">March 25, 2024</div>
                                        </div>
                                        <div>
                                            <div class="text-sm text-gray-500">Budget</div>
                                            <div class="font-medium text-gray-800">$8,500</div>
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
                </div>
            </div>

            <!-- Completed Projects Section -->
            <div>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Completed Projects</h2>
                    <span class="text-sm text-gray-500">8 projects</span>
                </div>
                <div class="space-y-6">
                    <!-- Completed Project 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center mb-4">
                                        <h3 class="text-lg font-bold text-gray-800 mr-4">Brand Identity Design</h3>
                                        <span class="px-3 py-1 text-sm font-medium text-green-600 bg-green-50 rounded-full">
                                            Completed
                                        </span>
                                    </div>
                                    <p class="text-gray-600 mb-6">Complete brand identity design including logo, color palette, and brand guidelines.</p>
                                    
                                    <!-- Timeline -->
                                    <div class="relative mb-6">
                                        <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-gray-200"></div>
                                        <div class="space-y-6">
                                            <!-- Timeline Items -->
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-green-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">Discovery</h4>
                                                        <p class="text-sm text-gray-500">Brand research and analysis</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">Completed</span>
                                                </div>
                                            </div>
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-green-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">Logo Design</h4>
                                                        <p class="text-sm text-gray-500">Primary and secondary logos</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">Completed</span>
                                                </div>
                                            </div>
                                            <div class="relative pl-6">
                                                <div class="absolute left-[-5px] top-0 w-3 h-3 bg-green-600 rounded-full"></div>
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="font-medium text-gray-800">Brand Guidelines</h4>
                                                        <p class="text-sm text-gray-500">Style guide and documentation</p>
                                                    </div>
                                                    <span class="text-sm text-gray-500">Completed</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Details -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                                 alt="Designer" 
                                                 class="w-8 h-8 rounded-full mr-3">
                                            <div>
                                                <div class="text-sm font-medium text-gray-800">Michael Brown</div>
                                                <div class="text-xs text-gray-500">Brand Designer</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-sm text-gray-500">Completed Date</div>
                                            <div class="font-medium text-gray-800">February 15, 2024</div>
                                        </div>
                                        <div>
                                            <div class="text-sm text-gray-500">Budget</div>
                                            <div class="font-medium text-gray-800">$5,500</div>
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
    </script>
</body>
</html> 