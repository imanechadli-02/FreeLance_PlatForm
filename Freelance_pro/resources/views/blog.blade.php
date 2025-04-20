<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - FreelancePro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .gradient-text {
            background: linear-gradient(45deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-gradient {
            
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
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
                    <a href="/blog" class="text-indigo-600 font-medium">Blog</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Contact</a>
                </div>
                <button class="bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition-colors">
                    Get Started
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient pt-32 pb-20">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Our <span class="gradient-text">Blog</span>
                </h1>
                <p class="text-gray-300 text-lg">
                    Insights, tips, and industry updates from our team of experts.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="md:col-span-2">
                    <!-- Search Bar -->
                    <div class="mb-12" data-aos="fade-up">
                        <div class="relative">
                            <input type="text" 
                                   placeholder="Search articles..." 
                                   class="w-full px-6 py-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <button class="absolute right-4 top-1/2 transform -translate-y-1/2">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Blog Articles -->
                    <div class="space-y-12">
                        <!-- Article 1 -->
                        <article class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up">
                            <div class="md:flex">
                                <div class="md:w-1/3">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="Web Development Trends" 
                                         class="w-full h-48 md:h-full object-cover">
                                </div>
                                <div class="p-8 md:w-2/3">
                                    <div class="flex items-center mb-4">
                                        <span class="text-sm text-indigo-600 font-medium">Web Development</span>
                                        <span class="mx-2 text-gray-300">•</span>
                                        <span class="text-sm text-gray-500">March 15, 2024</span>
                                    </div>
                                    <h2 class="text-2xl font-bold mb-4">The Future of Web Development: Trends to Watch in 2024</h2>
                                    <p class="text-gray-600 mb-6">Explore the latest trends shaping the future of web development, from AI integration to advanced frameworks and tools.</p>
                                    <div class="flex items-center">
                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                             alt="Author" 
                                             class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <div class="font-medium">John Smith</div>
                                            <div class="text-sm text-gray-500">Senior Developer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Article 2 -->
                        <article class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                            <div class="md:flex">
                                <div class="md:w-1/3">
                                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="UI/UX Design" 
                                         class="w-full h-48 md:h-full object-cover">
                                </div>
                                <div class="p-8 md:w-2/3">
                                    <div class="flex items-center mb-4">
                                        <span class="text-sm text-indigo-600 font-medium">UI/UX Design</span>
                                        <span class="mx-2 text-gray-300">•</span>
                                        <span class="text-sm text-gray-500">March 12, 2024</span>
                                    </div>
                                    <h2 class="text-2xl font-bold mb-4">Design Principles for Modern Web Applications</h2>
                                    <p class="text-gray-600 mb-6">Learn the essential design principles that create engaging and user-friendly web applications.</p>
                                    <div class="flex items-center">
                                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                             alt="Author" 
                                             class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <div class="font-medium">Sarah Johnson</div>
                                            <div class="text-sm text-gray-500">Lead Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Article 3 -->
                        <article class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                            <div class="md:flex">
                                <div class="md:w-1/3">
                                    <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="Digital Marketing" 
                                         class="w-full h-48 md:h-full object-cover">
                                </div>
                                <div class="p-8 md:w-2/3">
                                    <div class="flex items-center mb-4">
                                        <span class="text-sm text-indigo-600 font-medium">Digital Marketing</span>
                                        <span class="mx-2 text-gray-300">•</span>
                                        <span class="text-sm text-gray-500">March 10, 2024</span>
                                    </div>
                                    <h2 class="text-2xl font-bold mb-4">SEO Strategies for Better Website Visibility</h2>
                                    <p class="text-gray-600 mb-6">Discover effective SEO techniques to improve your website's search engine rankings and drive organic traffic.</p>
                                    <div class="flex items-center">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                             alt="Author" 
                                             class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <div class="font-medium">Michael Brown</div>
                                            <div class="text-sm text-gray-500">Marketing Director</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center" data-aos="fade-up">
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
                </div>

                <!-- Sidebar -->
                <div class="md:col-span-1">
                    <!-- Categories -->
                    <div class="bg-white rounded-2xl shadow-lg p-8 mb-8" data-aos="fade-up">
                        <h3 class="text-xl font-bold mb-6">Categories</h3>
                        <ul class="space-y-4">
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-600 hover:text-indigo-600 transition-colors">
                                    <span>Web Development</span>
                                    <span class="text-sm bg-gray-100 px-2 py-1 rounded-full">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-600 hover:text-indigo-600 transition-colors">
                                    <span>UI/UX Design</span>
                                    <span class="text-sm bg-gray-100 px-2 py-1 rounded-full">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-600 hover:text-indigo-600 transition-colors">
                                    <span>Digital Marketing</span>
                                    <span class="text-sm bg-gray-100 px-2 py-1 rounded-full">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-600 hover:text-indigo-600 transition-colors">
                                    <span>Mobile Development</span>
                                    <span class="text-sm bg-gray-100 px-2 py-1 rounded-full">6</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Popular Posts -->
                    <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-xl font-bold mb-6">Popular Posts</h3>
                        <div class="space-y-6">
                            <a href="#" class="flex items-center group">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                     alt="Popular post" 
                                     class="w-20 h-20 rounded-lg object-cover mr-4">
                                <div>
                                    <h4 class="font-medium group-hover:text-indigo-600 transition-colors">The Future of Web Development</h4>
                                    <p class="text-sm text-gray-500">March 15, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="flex items-center group">
                                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                     alt="Popular post" 
                                     class="w-20 h-20 rounded-lg object-cover mr-4">
                                <div>
                                    <h4 class="font-medium group-hover:text-indigo-600 transition-colors">Design Principles for 2024</h4>
                                    <p class="text-sm text-gray-500">March 12, 2024</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-indigo-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-8" data-aos="fade-up">Subscribe to Our Newsletter</h2>
            <p class="text-xl text-indigo-100 mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Stay updated with our latest articles and industry insights.
            </p>
            <div class="max-w-md mx-auto" data-aos="fade-up" data-aos-delay="200">
                <form class="flex gap-4">
                    <input type="email" 
                           placeholder="Enter your email" 
                           class="flex-1 px-6 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white">
                    <button class="bg-white text-indigo-600 px-8 py-3 rounded-full hover:bg-indigo-50 transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold gradient-text mb-4">FreelancePro</h3>
                    <p class="text-gray-400">Transforming ideas into digital reality.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="/services" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="/blog" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">Web Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Digital Marketing</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li>contact@freelancepro.com</li>
                        <li>+1 (555) 123-4567</li>
                        <li>123 Business Street</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p>&copy; 2024 FreelancePro. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
