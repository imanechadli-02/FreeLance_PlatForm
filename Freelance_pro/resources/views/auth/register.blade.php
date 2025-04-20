<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - FreelancePro</title>
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

<!-- Registration Section -->
<section class="min-h-screen flex items-center justify-center py-20">
  <div class="container mx-auto px-6">
    <div class="max-w-2xl mx-auto">
      <!-- Registration Header -->
      <div class="text-center mb-12" data-aos="fade-up">
        <h1 class="text-4xl font-bold mb-4">
          Create Your <span class="gradient-text">Account</span>
        </h1>
        <p class="text-gray-600">Join our community of clients and start your project today</p>
      </div>

      <!-- Registration Form -->
      <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="100">
        <form class="space-y-6">
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
              <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="John">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
              <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Doe">
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
            <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="john@example.com">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
            <input type="tel" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="+1 (555) 000-0000">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Company Ltd.">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Company Website</label>
            <input type="url" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="https://yourcompany.com">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Select Your Role</label>
            <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
              <option value="">Choose your role</option>
              <option value="client">Client</option>
              <option value="developer">Developer</option>
              <option value="admin">Admin</option>
            </select>
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
            <label class="block text-sm font-medium text-gray-700 mb-2">Project Description</label>
            <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Tell us about your project..."></textarea>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
            <input type="password" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Create a strong password">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
            <input type="password" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Confirm your password">
          </div>

          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input type="checkbox" class="w-4 h-4 text-indigo-600 rounded border-gray-300 focus:ring-indigo-500">
            </div>
            <div class="ml-3">
              <label class="text-sm text-gray-600">
                I agree to the 
                <a href="#" class="text-indigo-600 hover:text-indigo-700">Terms of Service</a> and 
                <a href="#" class="text-indigo-600 hover:text-indigo-700">Privacy Policy</a>
              </label>
            </div>
          </div>

          <button type="submit" class="w-full bg-indigo-600 text-white px-8 py-4 rounded-lg hover:bg-indigo-700 transition-colors">
            Create Account
          </button>
        </form>

        <p class="mt-8 text-center text-gray-600">
          Already have an account? 
          <a href="/login" class="text-indigo-600 hover:text-indigo-700 font-medium">Sign in</a>
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
          <li><a href="/" class="hover:text-indigo-400">Home</a></li>
          <li><a href="/services" class="hover:text-indigo-400">Services</a></li>
          <li><a href="/contact" class="hover:text-indigo-400">Contact</a></li>
          <li><a href="/blog" class="hover:text-indigo-400">Blog</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-lg font-semibold mb-4">Services</h4>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-indigo-400">Web Development</a></li>
          <li><a href="#" class="hover:text-indigo-400">UI/UX Design</a></li>
          <li><a href="#" class="hover:text-indigo-400">Digital Marketing</a></li>
          <li><a href="#" class="hover:text-indigo-400">App Development</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-lg font-semibold mb-4">Contact</h4>
        <p class="text-gray-400">Email: info@freelancepro.com</p>
        <p class="text-gray-400">Phone: +1 (555) 123-4567</p>
      </div>
    </div>
    <div class="mt-8 border-t border-gray-700 pt-6 text-center text-sm text-gray-500">
      &copy; 2025 FreelancePro. All rights reserved.
    </div>
  </div>
</footer>

<!-- AOS Initialization -->
<script>
  AOS.init();
</script>

</body>
</html>
