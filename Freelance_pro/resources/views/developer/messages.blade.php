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
                    <button id="projectsBtn" class="w-full flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        My Projects
                        <svg id="projectsArrow" class="w-4 h-4 ml-2 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="projectsList" class="hidden pl-12 space-y-1">
                        @forelse($activeProjects as $project)
                            <a href="{{ route('developer.tasks', $project) }}" class="block py-2 text-base font-semibold text-gray-600 hover:text-indigo-600">
                                {{ $project->title }}
                            </a>
                        @empty
                            <div class="py-2 text-sm text-gray-500">
                                No active projects
                            </div>
                        @endforelse
                    </div>
                </div>
                <a href="{{ route('developer.tasks') }}" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Tasks
                </a>
                <a href="{{ route('messages.index') }}" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
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
                <div class="flex items-center">
                    <img src="{{ auth()->user()->profile_photo_url }}" 
                         alt="User" 
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
                        
                        <a href="{{ route('messages.show', $project) }}" class="flex items-center p-3 {{ isset($selectedProject) && $selectedProject->id == $project->id ? 'bg-indigo-50' : 'hover:bg-gray-50' }} rounded-lg cursor-pointer">
                            <div class="relative">
                                <img src="{{ $otherUser->profile_photo_url }}" 
                                     alt="{{ $otherUser->name }}" 
                                     class="w-12 h-12 rounded-full">
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
                <h3 class="text-sm font-medium text-gray-500 mb-4">Active Projects</h3>
                <div class="space-y-4">
                    @forelse($activeProjects as $project)
                        <a href="{{ route('messages.show', $project) }}" class="block p-3 hover:bg-gray-50 rounded-lg">
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
                    @empty
                        <div class="text-center text-sm text-gray-500">
                            No active projects
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Chat Window -->
        <div class="flex-1 flex flex-col">
            @if(isset($project))
                <!-- Chat Header -->
                <div class="p-4 border-b bg-white">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            @php
                                $chatUser = auth()->user()->role === 'developer' ? $project->client : $project->developer;
                            @endphp
                            <img src="{{ $chatUser->profile_photo_url }}" 
                                 alt="{{ $chatUser->name }}" 
                                 class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h3 class="font-medium">{{ $chatUser->name }}</h3>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500">
                            Project: {{ $project->title }}
                        </div>
                    </div>
                </div>

                <!-- Chat Messages -->
                <div class="flex-1 overflow-y-auto p-4 space-y-4">
                    @forelse($messages->reverse() as $message)
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
                    @empty
                        <div class="text-center text-gray-500">
                            No messages yet. Start the conversation!
                        </div>
                    @endforelse
                </div>

                <!-- Chat Input -->
                <div class="p-4 border-t bg-white">
                    <form action="{{ route('messages.store', $project) }}" method="POST">
                        @csrf
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
                <div class="flex-1 flex items-center justify-center text-gray-500">
                    Select a project to start chatting
                </div>
            @endif
        </div>
    </main>

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
        });
    </script>
</body>
</html> 