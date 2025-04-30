<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a href="/developer/dashboard" class="flex items-center px-4 py-3 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                <a href="/developer/projects" class="flex items-center px-4 py-3 text-indigo-600 bg-indigo-50 rounded-lg">
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
    <main class="ml-64 p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">My Projects</h1>
                <p class="text-gray-600">Manage and track your assigned projects</p>
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

        <!-- Filters -->
        <div class="bg-white rounded-2xl shadow-sm p-6 mb-8" data-aos="fade-up">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Search -->
                <div class="relative">
                    <input type="text" 
                           placeholder="Search projects..." 
                           class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <!-- Status Filter -->
                <div>
                    <select class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="completed">Completed</option>
                        <option value="on-hold">On Hold</option>
                    </select>
                </div>

                <!-- Project Type -->
                <div>
                    <select class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">All Types</option>
                        <option value="web">Web Development</option>
                        <option value="mobile">Mobile App</option>
                        <option value="design">UI/UX Design</option>
                        <option value="marketing">Digital Marketing</option>
                    </select>
                </div>

                <!-- Sort By -->
                <div>
                    <select class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">Sort By</option>
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="deadline">Deadline</option>
                        <option value="priority">Priority</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Project Card 1 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden" data-aos="fade-up">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Project" 
                         class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">Active</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">E-commerce Website</h3>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500">Due in 2 weeks</span>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Building a modern e-commerce platform with React and Node.js</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Client" 
                                 class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <div class="text-sm font-medium">Sarah Johnson</div>
                                <div class="text-xs text-gray-500">Client</div>
                            </div>
                        </div>
                        <div class="text-sm font-medium text-indigo-600">$12,500</div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Progress</span>
                            <span class="font-medium">75%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <button class="px-4 py-2 text-sm text-indigo-600 hover:text-indigo-700">
                            View Details
                        </button>
                        <button class="px-4 py-2 text-sm text-gray-600 hover:text-gray-700">
                            Client Requests
                        </button>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Project" 
                         class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-50 rounded-full">In Progress</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Mobile App</h3>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500">Due in 4 weeks</span>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Developing a cross-platform mobile app using Flutter</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Client" 
                                 class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <div class="text-sm font-medium">Michael Brown</div>
                                <div class="text-xs text-gray-500">Client</div>
                            </div>
                        </div>
                        <div class="text-sm font-medium text-indigo-600">$8,500</div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Progress</span>
                            <span class="font-medium">45%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <button class="px-4 py-2 text-sm text-indigo-600 hover:text-indigo-700">
                            View Details
                        </button>
                        <button class="px-4 py-2 text-sm text-gray-600 hover:text-gray-700">
                            Client Requests
                        </button>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Project" 
                         class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 text-xs font-medium text-blue-600 bg-blue-50 rounded-full">Planning</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Dashboard UI</h3>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500">Due in 3 weeks</span>
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Designing a modern admin dashboard interface</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Client" 
                                 class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <div class="text-sm font-medium">Emily Davis</div>
                                <div class="text-xs text-gray-500">Client</div>
                            </div>
                        </div>
                        <div class="text-sm font-medium text-indigo-600">$6,500</div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Progress</span>
                            <span class="font-medium">25%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <button class="px-4 py-2 text-sm text-indigo-600 hover:text-indigo-700">
                            View Details
                        </button>
                        <button class="px-4 py-2 text-sm text-gray-600 hover:text-gray-700">
                            Client Requests
                        </button>
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

        // User menu toggle
        const userMenuButton = document.getElementById('userMenuButton');
        const userMenu = document.getElementById('userMenu');

        userMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenu.classList.toggle('hidden');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (event) => {
            if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.classList.add('hidden');
            }
        });

        // Prevent menu from closing when clicking inside it
        userMenu.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
</body>
</html> 