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
        .chat-container {
            height: calc(100vh - 200px);
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
                <a href="{{ route('client.dashboard') }}" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('client.projects') }}" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Projects
                </a>
                <a href="{{ route('client.messages') }}" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
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
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="User" 
                         class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <div class="font-medium">{{ auth()->user()->name }}</div>
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
                <h1 class="text-2xl font-bold text-gray-800">Messages</h1>
                <p class="text-gray-600">Communicate with your team members</p>
            </div>
        </div>

        <!-- Chat Interface -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="flex h-[calc(100vh-200px)]">
                <!-- Chat List -->
                <div class="w-80 border-r border-gray-200">
                    <!-- Search -->
                    <div class="p-4 border-b border-gray-200">
                        <div class="relative">
                            <input type="text" 
                                   placeholder="Search conversations..." 
                                   class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Chat List -->
                    <div class="overflow-y-auto h-[calc(100vh-280px)]">
                        <!-- Active Chat -->
                        <div class="p-4 bg-indigo-50 border-l-4 border-indigo-600">
                            <div class="flex items-center">
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="John Smith" 
                                         class="w-12 h-12 rounded-full">
                                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                                </div>
                                <div class="ml-4 flex-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-medium text-gray-900">John Smith</h3>
                                        <span class="text-sm text-gray-500">2m ago</span>
                                    </div>
                                    <p class="text-sm text-gray-600 truncate">Latest updates on the e-commerce project...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Other Chats -->
                        <div class="p-4 hover:bg-gray-50 cursor-pointer">
                            <div class="flex items-center">
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="Michael Brown" 
                                         class="w-12 h-12 rounded-full">
                                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-400 border-2 border-white rounded-full"></span>
                                </div>
                                <div class="ml-4 flex-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-medium text-gray-900">Michael Brown</h3>
                                        <span class="text-sm text-gray-500">1h ago</span>
                                    </div>
                                    <p class="text-sm text-gray-600 truncate">Mobile app development progress...</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 hover:bg-gray-50 cursor-pointer">
                            <div class="flex items-center">
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="Sarah Johnson" 
                                         class="w-12 h-12 rounded-full">
                                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                                </div>
                                <div class="ml-4 flex-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-medium text-gray-900">Sarah Johnson</h3>
                                        <span class="text-sm text-gray-500">2h ago</span>
                                    </div>
                                    <p class="text-sm text-gray-600 truncate">Marketing campaign strategy...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chat Window -->
                <div class="flex-1 flex flex-col bg-white">
                    @if(isset($project) && $project->developer)
                        <!-- Chat Header -->
                        <div class="p-4 border-b">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    @php
                                        $chatUser = auth()->user()->role === 'client' ? $project->developer : $project->client;
                                    @endphp
                                    <img src="{{ $chatUser->profile_photo_url ?? asset('images/default-avatar.png') }}" 
                                         alt="{{ $chatUser->name ?? 'User' }}" 
                                         class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <h3 class="font-medium">{{ $chatUser->name ?? 'Unknown User' }}</h3>
                                        <p class="text-sm text-gray-500">Project: {{ $project->title ?? 'Untitled Project' }}</p>
                                    </div>
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
                        <div class="p-4 border-t">
                            <form action="{{ route('client.messages.store', $project) }}" method="POST">
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
                            Select a conversation to start chatting
                        </div>
                    @endif
                </div>
            </div>
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