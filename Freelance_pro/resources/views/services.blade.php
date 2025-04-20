<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - FreelancePro</title>
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
                    <a href="/services" class="text-indigo-600 font-medium">Services</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Portfolio</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Blog</a>
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
                    Our <span class="gradient-text">Services</span>
                </h1>
                <p class="text-gray-300 text-lg">
                    Comprehensive digital solutions tailored to your needs. From web development to digital marketing, we've got you covered.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Web Development -->
                <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                    <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">Web Development</h2>
                    <p class="text-gray-600 mb-6">Custom websites and web applications built with cutting-edge technologies and best practices.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Responsive Design
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Custom Functionality
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Performance Optimization
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-indigo-600 mb-4">Starting from $1,500</div>
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700 transition-colors">
                        Learn More
                    </button>
                </div>

                <!-- UI/UX Design -->
                <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">UI/UX Design</h2>
                    <p class="text-gray-600 mb-6">Beautiful and intuitive user interfaces that enhance user experience and drive engagement.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            User Research
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Wireframing & Prototyping
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Visual Design
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-indigo-600 mb-4">Starting from $1,200</div>
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700 transition-colors">
                        Learn More
                    </button>
                </div>

                <!-- Digital Marketing -->
                <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">Digital Marketing</h2>
                    <p class="text-gray-600 mb-6">Strategic marketing solutions to grow your online presence and reach your target audience.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            SEO Optimization
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Social Media Marketing
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Content Strategy
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-indigo-600 mb-4">Starting from $800</div>
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700 transition-colors">
                        Learn More
                    </button>
                </div>

                <!-- Mobile App Development -->
                <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">Mobile App Development</h2>
                    <p class="text-gray-600 mb-6">Native and cross-platform mobile applications that deliver exceptional user experiences.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            iOS & Android Development
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Cross-platform Solutions
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            App Store Optimization
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-indigo-600 mb-4">Starting from $2,500</div>
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700 transition-colors">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing FAQ -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16" data-aos="fade-up">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-white rounded-xl p-6 shadow-sm" data-aos="fade-up">
                    <h3 class="text-xl font-semibold mb-2">How are project prices determined?</h3>
                    <p class="text-gray-600">Project prices are based on several factors including scope, complexity, required features, and timeline. We provide detailed quotes after understanding your specific requirements.</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-semibold mb-2">What payment terms do you offer?</h3>
                    <p class="text-gray-600">We typically require a 30% deposit to start work, with milestone payments throughout the project. Final payment is due upon project completion.</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-semibold mb-2">Do you offer ongoing support?</h3>
                    <p class="text-gray-600">Yes, we offer various maintenance and support packages to ensure your project continues to perform optimally after launch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-indigo-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-8" data-aos="fade-up">Ready to Get Started?</h2>
            <p class="text-xl text-indigo-100 mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Let's discuss your project requirements and create a custom solution for your needs.
            </p>
            <button class="bg-white text-indigo-600 px-8 py-3 rounded-full hover:bg-indigo-50 transition-colors" data-aos="fade-up" data-aos-delay="200">
                Schedule a Consultation
            </button>
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
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
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
