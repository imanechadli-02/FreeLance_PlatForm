<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Profile - FreelancePro</title>
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
                    <a href="/client/dashboard" class="text-gray-600 hover:text-indigo-600 transition-colors">Dashboard</a>
                    <a href="/client/projects" class="text-gray-600 hover:text-indigo-600 transition-colors">Projects</a>
                    <a href="/client/quotes" class="text-gray-600 hover:text-indigo-600 transition-colors">Quote Requests</a>
                    <a href="/client/messages" class="text-gray-600 hover:text-indigo-600 transition-colors">Messages</a>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <img src="{{ Auth::user()->profil_picture ? asset('storage/' . Auth::user()->profil_picture) : 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80' }}" 
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
                <h1 class="text-3xl font-bold text-gray-900">Client Profile</h1>
                <p class="text-gray-600 mt-2">Manage your account settings and preferences</p>
                @if(session('success'))
                    <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Sidebar -->
                <div class="md:col-span-1">
                    <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-24">
                        <div class="text-center mb-6">
                            <img src="{{ Auth::user()->profil_picture ? asset('storage/' . Auth::user()->profil_picture) : 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80' }}" 
                                 alt="Profile" 
                                 class="w-32 h-32 rounded-full mx-auto mb-4">
                            <h2 class="text-xl font-bold text-gray-900">{{ Auth::user()->name }}</h2>
                            <p class="text-gray-600">Client Account</p>
                        </div>
                        <nav class="space-y-2">
                            <a href="#profile" class="block px-4 py-2 text-indigo-600 bg-indigo-50 rounded-lg">Profile Information</a>
                            <a href="#company" class="block px-4 py-2 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">Company Details</a>
                            <a href="#billing" class="block px-4 py-2 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">Billing Information</a>
                            <a href="#security" class="block px-4 py-2 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">Security Settings</a>
                            <a href="#notifications" class="block px-4 py-2 text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg">Notification Preferences</a>
                        </nav>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="md:col-span-2 space-y-8">
                    <!-- Profile Information -->
                    <div id="profile" class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Profile Information</h2>
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @csrf
                            @method('PUT')
                            
                            @if($errors->any())
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <!-- Profile Picture -->
                            <div class="flex items-center space-x-6">
                                <div class="relative">
                                    <img id="profile-preview" 
                                         src="{{ Auth::user()->profil_picture ? asset('storage/' . Auth::user()->profil_picture) : 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80' }}" 
                                         alt="Profile" 
                                         class="w-24 h-24 rounded-full object-cover">
                                    <label for="profile-picture" class="absolute bottom-0 right-0 bg-white rounded-full p-2 shadow-lg cursor-pointer hover:bg-gray-50">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        <input type="file" 
                                               id="profile-picture" 
                                               name="profil_picture" 
                                               accept="image/*" 
                                               class="hidden"
                                               onchange="previewImage(this)">
                                    </label>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">{{ Auth::user()->name }}</h3>
                                    <p class="text-gray-600">Client</p>
                                    <p class="text-sm text-gray-500 mt-1">Click the camera icon to change your profile picture</p>
                                </div>
                            </div>

                            <!-- Form Fields -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                    <input type="text" 
                                           id="name" 
                                           name="name" 
                                           value="{{ Auth::user()->name }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                    <input type="tel" 
                                           id="phone" 
                                           name="phone" 
                                           value="{{ Auth::user()->phone }}"
                                           placeholder="+1 (555) 000-0000"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ Auth::user()->email }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>

                            <!-- Company Details -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="company_name" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                    <input type="text" 
                                           id="company_name" 
                                           name="company_name" 
                                           value="{{ Auth::user()->company_name }}"
                                           placeholder="Enter your company name"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="company_website" class="block text-sm font-medium text-gray-700 mb-2">Company Website</label>
                                    <input type="url" 
                                           id="company_website" 
                                           name="company_website" 
                                           value="{{ Auth::user()->company_website }}"
                                           placeholder="https://example.com"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                </div>
                            </div>

                            <div>
                                <label for="company_description" class="block text-sm font-medium text-gray-700 mb-2">Company Description</label>
                                <textarea id="company_description" 
                                          name="company_description" 
                                          rows="4" 
                                          placeholder="Tell us about your company..."
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">{{ Auth::user()->company_description }}</textarea>
                            </div>

                            <!-- Save Button -->
                            <div class="flex justify-end">
                                <button type="submit" 
                                        class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Save All Changes
                                </button>
                            </div>
                        </form>
                    </div>

                

                    <!-- Billing Information -->
                    <div id="billing" class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Billing Information</h2>
                        <div class="space-y-6">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Payment Methods</h3>
                                    <p class="text-gray-600">Manage your payment methods</p>
                                </div>
                                <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                                    Add Payment Method
                                </button>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Billing History</h3>
                                    <p class="text-gray-600">View your past invoices</p>
                                </div>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                    View History
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Security Settings -->
                    <div id="security" class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Security Settings</h2>
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Change Password</h3>
                                    <p class="text-gray-600">Update your password regularly</p>
                                </div>
                                <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                                    Change
                                </button>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Two-Factor Authentication</h3>
                                    <p class="text-gray-600">Add an extra layer of security</p>
                                </div>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                    Enable
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Notification Preferences -->
                    <div id="notifications" class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Notification Preferences</h2>
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Project Updates</h3>
                                    <p class="text-gray-600">Receive notifications about project progress</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Quote Requests</h3>
                                    <p class="text-gray-600">Get notified about new quote requests</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Messages</h3>
                                    <p class="text-gray-600">Receive notifications for new messages</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                                </label>
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

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Profile picture preview
        function previewImage(input) {
            const preview = document.getElementById('profile-preview');
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html> 