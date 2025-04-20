<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FreelancePro</title>
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
                    <a href="/blog" class="text-gray-600 hover:text-indigo-600 transition-colors">Blog</a>
                    <a href="/contact" class="text-gray-600 hover:text-indigo-600 transition-colors">Contact</a>
                </div>
                <button class="bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition-colors">
                    Get Started
                </button>
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="min-h-screen flex items-center justify-center py-20">
        <div class="container mx-auto px-6">
            <div class="max-w-md mx-auto">
                <!-- Login Header -->
                <div class="text-center mb-12" data-aos="fade-up">
                    <h1 class="text-4xl font-bold mb-4">
                        Welcome <span class="gradient-text">Back</span>
                    </h1>
                    <p class="text-gray-600">Sign in to your account to continue</p>
                </div>

                <!-- Login Form -->
                <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="100">
                    <form class="space-y-6">
                        <!-- Role Selection -->
                        <div class="flex space-x-4 mb-6">
                            <button type="button" 
                                    class="flex-1 py-3 px-4 rounded-lg border-2 border-indigo-600 text-indigo-600 font-medium hover:bg-indigo-50 transition-colors">
                                Admin
                            </button>
                            <button type="button" 
                                    class="flex-1 py-3 px-4 rounded-lg border-2 border-gray-200 text-gray-600 font-medium hover:bg-gray-50 transition-colors">
                                Client
                            </button>
                            <button type="button" 
                                    class="flex-1 py-3 px-4 rounded-lg border-2 border-gray-200 text-gray-600 font-medium hover:bg-gray-50 transition-colors">
                                Developer
                            </button>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                   placeholder="Enter your email">
                        </div>

                        <!-- Password -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <div class="relative">
                                <input type="password" 
                                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                       placeholder="Enter your password">
                                <button type="button" 
                                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="checkbox" 
                                       class="w-4 h-4 text-indigo-600 rounded border-gray-300 focus:ring-indigo-500">
                                <label class="ml-2 text-sm text-gray-600">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-700">Forgot password?</a>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" 
                                class="w-full bg-indigo-600 text-white px-8 py-4 rounded-lg hover:bg-indigo-700 transition-colors">
                            Sign In
                        </button>

                        <!-- Social Login -->
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">Or continue with</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <button type="button" 
                                    class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/>
                                </svg>
                            </button>
                            <button type="button" 
                                    class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </button>
                            <button type="button" 
                                    class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </button>
                        </div>
                    </form>

                    <!-- Sign Up Link -->
                    <p class="mt-8 text-center text-gray-600">
                        Don't have an account? 
                        <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium">Sign up</a>
                    </p>
                </div>
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
                        <li><a href="/contact" class="hover:text-white transition-colors">Contact</a></li>
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

        // Role selection functionality
        document.querySelectorAll('button[type="button"]').forEach(button => {
            button.addEventListener('click', function() {
                if (this.textContent.trim() === 'Admin' || 
                    this.textContent.trim() === 'Client' || 
                    this.textContent.trim() === 'Developer') {
                    // Remove active state from all buttons
                    document.querySelectorAll('button[type="button"]').forEach(btn => {
                        btn.classList.remove('border-indigo-600', 'text-indigo-600');
                        btn.classList.add('border-gray-200', 'text-gray-600');
                    });
                    // Add active state to clicked button
                    this.classList.remove('border-gray-200', 'text-gray-600');
                    this.classList.add('border-indigo-600', 'text-indigo-600');
                }
            });
        });
    </script>
</body>
</html> 