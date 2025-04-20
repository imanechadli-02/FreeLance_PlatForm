<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management - FreelancePro</title>
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
                <a href="/developer/tasks" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
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
                        <div class="font-medium">John Smith</div>
                        <div class="text-sm text-gray-500">Senior Developer</div>
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
                <h1 class="text-2xl font-bold text-gray-800">Task Management</h1>
                <p class="text-gray-600">Track and manage your project tasks</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="px-4 py-2 text-gray-600 hover:text-indigo-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </button>
                <button class="px-4 py-2 text-gray-600 hover:text-indigo-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Task Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-2xl shadow-sm p-6" data-aos="fade-up">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-500">Total Tasks</h3>
                    <span class="p-2 bg-indigo-50 rounded-lg">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </span>
                </div>
                <div class="text-3xl font-bold text-gray-900">24</div>
            </div>
            <div class="bg-white rounded-2xl shadow-sm p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-500">Completed</h3>
                    <span class="p-2 bg-green-50 rounded-lg">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </span>
                </div>
                <div class="text-3xl font-bold text-gray-900">18</div>
            </div>
            <div class="bg-white rounded-2xl shadow-sm p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-500">In Progress</h3>
                    <span class="p-2 bg-yellow-50 rounded-lg">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </span>
                </div>
                <div class="text-3xl font-bold text-gray-900">4</div>
            </div>
            <div class="bg-white rounded-2xl shadow-sm p-6" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-500">Due Today</h3>
                    <span class="p-2 bg-red-50 rounded-lg">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </span>
                </div>
                <div class="text-3xl font-bold text-gray-900">2</div>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-2xl shadow-sm p-6 mb-8" data-aos="fade-up">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Search -->
                <div class="relative">
                    <input type="text" 
                           placeholder="Search tasks..." 
                           class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <!-- Status Filter -->
                <div>
                    <select class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">All Status</option>
                        <option value="todo">To Do</option>
                        <option value="in-progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <!-- Project Filter -->
                <div>
                    <select class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">All Projects</option>
                        <option value="ecommerce">E-commerce Website</option>
                        <option value="mobile">Mobile App</option>
                        <option value="dashboard">Dashboard UI</option>
                    </select>
                </div>

                <!-- Sort By -->
                <div>
                    <select class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">Sort By</option>
                        <option value="due-date">Due Date</option>
                        <option value="priority">Priority</option>
                        <option value="status">Status</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Tasks List -->
        <div class="space-y-4">
            <!-- Task Item 1 -->
            <div class="bg-white rounded-2xl shadow-sm p-6" data-aos="fade-up">
                <div class="flex items-start justify-between">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <input type="checkbox" class="w-5 h-5 text-indigo-600 rounded border-gray-300 focus:ring-indigo-500">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Implement User Authentication</h3>
                            <p class="text-gray-600 mt-1">Set up secure user authentication system with JWT tokens and refresh tokens</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <span class="px-3 py-1 text-xs font-medium text-indigo-600 bg-indigo-50 rounded-full">E-commerce Website</span>
                                <span class="px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-50 rounded-full">In Progress</span>
                                <span class="text-sm text-gray-500">Due in 2 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 text-gray-400 hover:text-indigo-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                            </svg>
                        </button>
                        <button class="p-2 text-gray-400 hover:text-indigo-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Progress</span>
                        <span class="font-medium">60%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2 mt-2">
                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
            </div>

            <!-- Task Item 2 -->
            <div class="bg-white rounded-2xl shadow-sm p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start justify-between">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <input type="checkbox" class="w-5 h-5 text-indigo-600 rounded border-gray-300 focus:ring-indigo-500">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Design Mobile App UI</h3>
                            <p class="text-gray-600 mt-1">Create modern and intuitive UI designs for the mobile application</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <span class="px-3 py-1 text-xs font-medium text-indigo-600 bg-indigo-50 rounded-full">Mobile App</span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">Completed</span>
                                <span class="text-sm text-gray-500">Completed 2 days ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 text-gray-400 hover:text-indigo-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                            </svg>
                        </button>
                        <button class="p-2 text-gray-400 hover:text-indigo-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Progress</span>
                        <span class="font-medium">100%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2 mt-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                    </div>
                </div>
            </div>

            <!-- Task Item 3 -->
            <div class="bg-white rounded-2xl shadow-sm p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start justify-between">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <input type="checkbox" class="w-5 h-5 text-indigo-600 rounded border-gray-300 focus:ring-indigo-500">
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Implement Dashboard Analytics</h3>
                            <p class="text-gray-600 mt-1">Create interactive analytics dashboard with charts and data visualization</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <span class="px-3 py-1 text-xs font-medium text-indigo-600 bg-indigo-50 rounded-full">Dashboard UI</span>
                                <span class="px-3 py-1 text-xs font-medium text-blue-600 bg-blue-50 rounded-full">To Do</span>
                                <span class="text-sm text-gray-500">Due in 5 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 text-gray-400 hover:text-indigo-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                            </svg>
                        </button>
                        <button class="p-2 text-gray-400 hover:text-indigo-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Progress</span>
                        <span class="font-medium">0%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2 mt-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center" data-aos="fade-up">
            <nav class="flex items-center space-x-2">
                <button class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-indigo-50 transition-colors">
                    Previous
                </button>
                <button class="px-4 py-2 rounded-lg bg-indigo-600 text-white">1</button>
                <button class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-indigo-50 transition-colors">2</button>
                <button class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-indigo-50 transition-colors">3</button>
                <button class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-indigo-50 transition-colors">
                    Next
                </button>
            </nav>
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