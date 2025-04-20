<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FreelancePro</title>
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
                    <a href="/contact" class="text-indigo-600 font-medium">Contact</a>
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
                    Get in <span class="gradient-text">Touch</span>
                </h1>
                <p class="text-gray-300 text-lg">
                    Have a project in mind? Let's discuss how we can help bring your ideas to life.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                    <h2 class="text-2xl font-bold mb-8">Send us a Message</h2>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" 
                                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                       placeholder="John">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" 
                                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                       placeholder="Doe">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                   placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                   placeholder="+1 (555) 000-0000">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Project Type</label>
                            <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option value="">Select a project type</option>
                                <option value="web">Web Development</option>
                                <option value="design">UI/UX Design</option>
                                <option value="marketing">Digital Marketing</option>
                                <option value="mobile">Mobile App Development</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" 
                                      class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                      placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" 
                                class="w-full bg-indigo-600 text-white px-8 py-4 rounded-lg hover:bg-indigo-700 transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8" data-aos="fade-up" data-aos-delay="100">
                    <!-- Office Location -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-xl font-bold mb-6">Our Office</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Visit Us</h4>
                                    <p class="text-gray-600">123 Business Street<br>New York, NY 10001<br>United States</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Email Us</h4>
                                    <p class="text-gray-600">contact@freelancepro.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Call Us</h4>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-xl font-bold mb-6">Business Hours</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Monday - Friday</span>
                                <span class="font-medium">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Saturday</span>
                                <span class="font-medium">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Sunday</span>
                                <span class="font-medium">Closed</span>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-xl font-bold mb-6">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 hover:bg-indigo-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 hover:bg-indigo-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 hover:bg-indigo-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1647891234567!5m2!1sen!2s" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
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
    </script>
</body>
</html> 