<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings - FreelancePro</title>
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
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/80 backdrop-blur-md z-50 shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold gradient-text">FreelancePro</div>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-600 hover:text-indigo-600 transition-colors">Home</a>
                    <a href="/services" class="text-gray-600 hover:text-indigo-600 transition-colors">Services</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Portfolio</a>
                    <a href="/blog" class="text-gray-600 hover:text-indigo-600 transition-colors">Blog</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-indigo-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Profile" 
                             class="w-10 h-10 rounded-full cursor-pointer">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="pt-24 pb-12">
        <div class="container mx-auto px-6">
            <!-- Header -->
            <div class="mb-8" data-aos="fade-up">
                <h1 class="text-3xl font-bold text-gray-900">Profile Settings</h1>
            </div>

            

                <!-- Main Content -->
                <div class="md:col-span-2 space-y-8">
                    <!-- Profile Information -->
                    <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Profile Information</h2>
                        <form class="space-y-6">
                            <!-- Profile Picture -->
                            <div class="flex items-center space-x-6">
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="Profile" 
                                         class="w-24 h-24 rounded-full">
                                    <button class="absolute bottom-0 right-0 bg-white rounded-full p-2 shadow-lg">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">John Smith</h3>
                                    <p class="text-gray-600">Senior Developer</p>
                                </div>
                            </div>

                            <!-- Form Fields -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                    <input type="text" 
                                           id="first-name" 
                                           name="first-name" 
                                           value="John"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="last-name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                    <input type="text" 
                                           id="last-name" 
                                           name="last-name" 
                                           value="Smith"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="john.smith@example.com"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>

                            <div>
                                <label for="bio" class="block text-sm font-medium text-gray-700 mb-2">Bio</label>
                                <textarea id="bio" 
                                          name="bio" 
                                          rows="4" 
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">Experienced developer with expertise in web development and UI/UX design.</textarea>
                            </div>

                            <div>
                                <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                                <input type="text" 
                                       id="location" 
                                       name="location" 
                                       value="San Francisco, CA"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>

                            <!-- Save Button -->
                            <div class="flex justify-end">
                                <button type="submit" 
                                        class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Security Settings -->
                    <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Security Settings</h2>
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Two-Factor Authentication</h3>
                                    <p class="text-gray-600">Add an extra layer of security to your account</p>
                                </div>
                                <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                                    Enable
                                </button>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Change Password</h3>
                                    <p class="text-gray-600">Update your password regularly</p>
                                </div>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                    Change
                                </button>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Login History</h3>
                                    <p class="text-gray-600">View your recent login activity</p>
                                </div>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                    View
                                </button>
                            </div>
                        </div>
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
    </script>
</body>
</html> 