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
                <a href="/client/dashboard" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                <a href="/client/projects" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Projects
                </a>
                <a href="/client/request-service" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Request Service
                </a>
                <a href="/client/service-history" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Service History
                </a>
                <a href="/client/quotes" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Quote Requests
                </a>
                <a href="/client/messages" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
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
                <div class="flex-1 flex flex-col">
                    <!-- Chat Header -->
                    <div class="p-4 border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                     alt="John Smith" 
                                     class="w-10 h-10 rounded-full">
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-medium text-gray-900">John Smith</h3>
                                <p class="text-sm text-gray-500">Online</p>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Messages -->
                    <div class="flex-1 overflow-y-auto p-4 space-y-4">
                        <!-- Message 1 -->
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="John Smith" 
                                 class="w-8 h-8 rounded-full mr-3">
                            <div class="flex-1">
                                <div class="bg-gray-100 rounded-2xl rounded-tl-none px-4 py-2">
                                    <p class="text-gray-800">Hi Sarah! I've completed the initial design for the e-commerce website. Would you like to review it?</p>
                                </div>
                                <span class="text-xs text-gray-500 mt-1">10:30 AM</span>
                            </div>
                        </div>

                        <!-- Message 2 -->
                        <div class="flex items-start justify-end">
                            <div class="flex-1 max-w-[70%]">
                                <div class="bg-indigo-600 text-white rounded-2xl rounded-tr-none px-4 py-2">
                                    <p>Yes, I'd love to review it! When can we schedule a call?</p>
                                </div>
                                <span class="text-xs text-gray-500 mt-1 text-right">10:32 AM</span>
                            </div>
                        </div>

                        <!-- Message 3 -->
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="John Smith" 
                                 class="w-8 h-8 rounded-full mr-3">
                            <div class="flex-1">
                                <div class="bg-gray-100 rounded-2xl rounded-tl-none px-4 py-2">
                                    <p>I'm available tomorrow at 2 PM. I'll send you the design files and we can go through them together.</p>
                                </div>
                                <span class="text-xs text-gray-500 mt-1">10:33 AM</span>
                            </div>
                        </div>

                        <!-- Message 4 -->
                        <div class="flex items-start justify-end">
                            <div class="flex-1 max-w-[70%]">
                                <div class="bg-indigo-600 text-white rounded-2xl rounded-tr-none px-4 py-2">
                                    <p>Perfect! That works for me. I'll make sure to review the files before our call.</p>
                                </div>
                                <span class="text-xs text-gray-500 mt-1 text-right">10:34 AM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Input -->
                    <div class="p-4 border-t border-gray-200">
                        <div class="flex items-center space-x-4">
                            <button class="text-gray-400 hover:text-indigo-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                                </svg>
                            </button>
                            <input type="text" 
                                   placeholder="Type your message..." 
                                   class="flex-1 px-4 py-2 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <button class="text-gray-400 hover:text-indigo-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </button>
                            <button class="bg-indigo-600 text-white p-2 rounded-full hover:bg-indigo-700 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                            </button>
                        </div>
                    </div>
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