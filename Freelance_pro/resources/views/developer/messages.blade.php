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
                <a href="/developer/dashboard" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                <a href="/developer/projects" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Projects
                </a>
                <a href="/developer/tasks" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Tasks
                </a>
                <a href="/developer/reports" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Reports
                </a>
                <a href="/developer/messages" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
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
                        <div class="font-medium">John Smith</div>
                        <div class="text-sm text-gray-500">Senior Developer</div>
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
                    <!-- Chat Item 1 -->
                    <div class="flex items-center p-3 bg-indigo-50 rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Client" 
                                 class="w-12 h-12 rounded-full">
                            <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="font-medium">Sarah Johnson</h4>
                                <span class="text-xs text-gray-500">2m ago</span>
                            </div>
                            <p class="text-sm text-gray-600 truncate">Latest updates on the project timeline...</p>
                        </div>
                    </div>

                    <!-- Chat Item 2 -->
                    <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Admin" 
                                 class="w-12 h-12 rounded-full">
                            <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-400 border-2 border-white rounded-full"></span>
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="font-medium">Admin Team</h4>
                                <span class="text-xs text-gray-500">1h ago</span>
                            </div>
                            <p class="text-sm text-gray-600 truncate">System maintenance schedule...</p>
                        </div>
                    </div>

                    <!-- Chat Item 3 -->
                    <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Client" 
                                 class="w-12 h-12 rounded-full">
                            <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="font-medium">Emily Davis</h4>
                                <span class="text-xs text-gray-500">3h ago</span>
                            </div>
                            <p class="text-sm text-gray-600 truncate">Design feedback for the new feature...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Chats -->
            <div class="p-4 border-t">
                <h3 class="text-sm font-medium text-gray-500 mb-4">Other Chats</h3>
                <div class="space-y-4">
                    <!-- Chat Item 4 -->
                    <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Client" 
                                 class="w-12 h-12 rounded-full">
                            <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-400 border-2 border-white rounded-full"></span>
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="font-medium">Mike Wilson</h4>
                                <span class="text-xs text-gray-500">1d ago</span>
                            </div>
                            <p class="text-sm text-gray-600 truncate">Project requirements discussion...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Window -->
        <div class="flex-1 flex flex-col">
            <!-- Chat Header -->
            <div class="p-4 border-b bg-white">
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Client" 
                         class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <h3 class="font-medium">Sarah Johnson</h3>
                        <p class="text-sm text-gray-500">Online</p>
                    </div>
                </div>
            </div>

            <!-- Chat Messages -->
            <div class="flex-1 overflow-y-auto p-4 space-y-4">
                <!-- Message 1 (Received) -->
                <div class="flex items-start">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Client" 
                         class="w-8 h-8 rounded-full mr-3">
                    <div class="bg-gray-100 rounded-lg p-3 max-w-md">
                        <p class="text-gray-800">Hi! I've reviewed the latest changes to the project. The new feature looks great, but we need to make some adjustments to the user interface.</p>
                        <span class="text-xs text-gray-500 mt-1 block">10:30 AM</span>
                    </div>
                </div>

                <!-- Message 2 (Sent) -->
                <div class="flex items-start justify-end">
                    <div class="bg-indigo-600 text-white rounded-lg p-3 max-w-md">
                        <p>Thanks for the feedback! I'll make the necessary adjustments to the UI. Would you like me to show you the changes before implementing them?</p>
                        <span class="text-xs text-indigo-100 mt-1 block">10:32 AM</span>
                    </div>
                </div>

                <!-- Message 3 (Received) -->
                <div class="flex items-start">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Client" 
                         class="w-8 h-8 rounded-full mr-3">
                    <div class="bg-gray-100 rounded-lg p-3 max-w-md">
                        <p class="text-gray-800">Yes, that would be helpful. Also, I noticed a small bug in the login page. Could you take a look at that?</p>
                        <span class="text-xs text-gray-500 mt-1 block">10:35 AM</span>
                    </div>
                </div>

                <!-- Message 4 (Sent) -->
                <div class="flex items-start justify-end">
                    <div class="bg-indigo-600 text-white rounded-lg p-3 max-w-md">
                        <p>I'll check the login page right away. Could you describe the bug you're experiencing?</p>
                        <span class="text-xs text-indigo-100 mt-1 block">10:36 AM</span>
                    </div>
                </div>
            </div>

            <!-- Chat Input -->
            <div class="p-4 border-t bg-white">
                <div class="flex items-center space-x-4">
                    <button class="p-2 text-gray-400 hover:text-indigo-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                        </svg>
                    </button>
                    <input type="text" 
                           placeholder="Type your message..." 
                           class="flex-1 px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button class="p-2 text-gray-400 hover:text-indigo-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </button>
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                        Send
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html> 