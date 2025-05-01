<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - FreelancePro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .gradient-text {
            background: linear-gradient(45deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        #projectsDropdown {
            max-height: 400px;
            overflow-y: auto;
            transition: all 0.3s ease;
        }
        .rotate-180 {
            transform: rotate(180deg);
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
                <a href="{{ route('developer.tasks') }}" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Tasks
                </a>
                <a href="{{ route('developer.messages') }}" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                    Messages
                </a>
                <a href="{{ route('profile') }}" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Profile
                </a>
            </nav>

            <!-- User Profile -->
            <div class="p-4 border-t">
                <div class="relative">
                    <button id="userMenuButton" class="flex items-center w-full text-left hover:bg-gray-50 rounded-lg p-2">
                        <img src="{{ Auth::user()->profil_picture ? asset('storage/' . Auth::user()->profil_picture) : 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80' }}" 
                             alt="{{ Auth::user()->name }}" 
                             class="w-10 h-10 rounded-full mr-3 object-cover">
                        <div class="cursor-pointer">
                            <div class="font-medium hover:text-indigo-600">{{ Auth::user()->name }}</div>
                            <div class="text-sm text-gray-500">Developer</div>
                        </div>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="userMenu" class="hidden absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                        <div class="py-1" role="menu" aria-orientation="vertical">
                            <a href="{{ route('profile') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Edit Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="block">
                                @csrf
                                <button type="submit" class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 h-screen flex">
        <!-- Chat List -->
        <div class="w-80 border-r bg-white">
            <!-- Search -->
            <div class="p-4 border-b">
                <div class="relative">
                    <input type="text" 
                           placeholder="Search conversations..." 
                           class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>

            <!-- Active Chats -->
            <div class="p-4">
                <h3 class="text-sm font-medium text-gray-500 mb-4">Active Chats</h3>
                <div class="space-y-4">
                    @forelse($conversations as $projectId => $conversation)
                        @php
                            $project = $conversation->first()->project;
                            $otherUser = auth()->user()->role === 'developer' ? $project->client : $project->developer;
                            $lastMessage = $conversation->first();
                        @endphp
                        
                        <a href="{{ route('developer.messages.show', $project) }}" class="flex items-center p-3 {{ isset($selectedProject) && $selectedProject->id == $project->id ? 'bg-indigo-50' : 'hover:bg-gray-50' }} rounded-lg cursor-pointer">
                            <div class="relative">
                                <img src="{{ $otherUser->profil_picture ? asset('storage/' . $otherUser->profil_picture) : 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80' }}" 
                                     alt="{{ $otherUser->name }}" 
                                     class="w-12 h-12 rounded-full object-cover">
                            </div>
                            <div class="ml-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-medium">{{ $otherUser->name }}</h4>
                                        <p class="text-xs text-gray-500">{{ $project->title }}</p>
                                    </div>
                                    <span class="text-xs text-gray-500">{{ $lastMessage->created_at->diffForHumans() }}</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">{{ $lastMessage->message }}</p>
                            </div>
                        </a>
                    @empty
                        <div class="p-4 text-center text-gray-500">
                            No messages yet. Start a conversation!
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Active Projects -->
            <div class="p-4 border-t">
                <button id="projectsDropdownBtn" class="w-full flex items-center justify-between text-sm font-medium text-gray-500 mb-4 hover:text-indigo-600 focus:outline-none">
                    <span>All Projects ({{ $activeProjects->count() }})</span>
                    <svg id="projectsDropdownArrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="projectsDropdown" class="space-y-4">
                    @if($activeProjects->count() > 0)
                        @foreach($activeProjects as $project)
                            <a href="{{ route('developer.messages.show', $project) }}" class="block p-3 hover:bg-gray-50 rounded-lg">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-medium text-gray-900">{{ $project->title }}</h4>
                                        <p class="text-sm text-gray-500">{{ $project->client->name }}</p>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="px-2 py-1 text-xs font-medium 
                                            @if($project->status == 'in_progress') text-blue-600 bg-blue-50
                                            @elseif($project->status == 'pending') text-yellow-600 bg-yellow-50
                                            @else text-green-600 bg-green-50
                                            @endif rounded-full">
                                            {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-2 flex items-center justify-between text-xs text-gray-500">
                                    <div>
                                        <span class="font-medium">Tasks:</span> 
                                        <span class="text-gray-900">{{ $project->tasks->count() }}</span>
                                    </div>
                                    <div>
                                        <span class="font-medium">Due:</span> 
                                        <span class="text-gray-900">{{ $project->deadline->format('M d, Y') }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <div class="text-center text-sm text-gray-500">
                            No projects found
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Chat Window -->
        <div class="flex-1 flex flex-col">
            @if(isset($selectedProject) && $selectedProject)
                <!-- Chat Header -->
                <div class="p-4 border-b bg-white">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="{{ $selectedProject->client->profil_picture ? asset('storage/' . $selectedProject->client->profil_picture) : 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80' }}" 
                                 alt="{{ $selectedProject->client->name }}" 
                                 class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h3 class="font-medium">{{ $selectedProject->client->name }}</h3>
                                <p class="text-sm text-gray-500">Project: {{ $selectedProject->title }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chat Messages -->
                <div class="flex-1 overflow-y-auto p-4 space-y-4 flex flex-col">
                    @if(isset($messages) && $messages->count() > 0)
                        @foreach($messages as $message)
                            <div class="flex {{ $message->sender_id == auth()->id() ? 'justify-end' : 'justify-start' }}">
                                <div class="max-w-[70%]">
                                    <div class="flex items-center {{ $message->sender_id == auth()->id() ? 'justify-end' : 'justify-start' }} mb-1">
                                        <span class="text-xs text-gray-500">{{ $message->created_at->format('h:i A') }}</span>
                                    </div>
                                    <div class="rounded-lg p-3 {{ $message->sender_id == auth()->id() ? 'bg-indigo-600 text-white' : 'bg-gray-100 text-gray-900' }}">
                                        {{ $message->message }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center text-gray-500">
                            No messages yet. Start the conversation!
                        </div>
                    @endif
                </div>

                <!-- Chat Input -->
                @if($selectedProject->developer_id)
                    <div class="p-4 border-t bg-white">
                        <form action="{{ route('developer.messages.store', $selectedProject) }}" method="POST">
                            @csrf
                            <input type="hidden" name="project_id" value="{{ $selectedProject->id }}">
                            <div class="flex items-center space-x-4">
                                <input type="text" 
                                       name="message" 
                                       class="flex-1 px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                                       placeholder="Type your message..."
                                       required>
                                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="p-4 border-t bg-white text-center text-gray-500">
                        No developer assigned to this project yet. You can start messaging once a developer is assigned.
                    </div>
                @endif
            @else
                <div class="flex-1 flex items-center justify-center text-gray-500">
                    Select a project to start chatting
                </div>
            @endif
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // User menu toggle
            const userMenuButton = document.getElementById('userMenuButton');
            const userMenu = document.getElementById('userMenu');

            if (userMenuButton && userMenu) {
                userMenuButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    userMenu.classList.toggle('hidden');
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                        userMenu.classList.add('hidden');
                    }
                });

                // Prevent menu from closing when clicking inside it
                userMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }

            // Active Projects Dropdown
            const projectsDropdownBtn = document.getElementById('projectsDropdownBtn');
            const projectsDropdown = document.getElementById('projectsDropdown');
            const projectsDropdownArrow = document.getElementById('projectsDropdownArrow');
            
            if (projectsDropdownBtn && projectsDropdown && projectsDropdownArrow) {
                projectsDropdownBtn.addEventListener('click', function() {
                    if (projectsDropdown.style.display === 'none') {
                        projectsDropdown.style.display = 'block';
                        projectsDropdownArrow.classList.add('rotate-180');
                    } else {
                        projectsDropdown.style.display = 'none';
                        projectsDropdownArrow.classList.remove('rotate-180');
                    }
                });
            }

            // Auto-scroll to bottom when page loads
            const chatMessages = document.querySelector('.flex-1.overflow-y-auto');
            if (chatMessages) {
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        });

        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html> 