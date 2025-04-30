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
    .password-strength-meter {
      height: 4px;
      background-color: #e5e7eb;
      border-radius: 2px;
      overflow: hidden;
    }
    .password-strength-meter div {
      height: 100%;
      width: 0;
      transition: width 0.3s ease;
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
        <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Services</a>
        <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">Portfolio</a>
      </div>
      
    </div>
  </div>
</nav>

<!-- Registration Section -->
<section class="min-h-screen flex items-center justify-center py-20">
  <div class="container mx-auto px-6">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md p-8">
      <!-- Registration Header -->
      <div class="text-center mb-12" data-aos="fade-up">
        <h1 class="text-4xl font-bold mb-4">
          Create Your <span class="gradient-text">Account</span>
        </h1>
        <p class="text-gray-600">Join our community of clients and start your project today</p>
      </div>

      <form method="POST" action="/register" class="space-y-6">
        @csrf

        <!-- Personal Information Section -->
        <div class="bg-gray-50 p-6 rounded-lg mb-6">
          <h2 class="text-lg font-semibold mb-4 text-gray-800">Personal Information</h2>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2" for="name">Full Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}"
              class="w-full px-4 py-3 rounded-lg border @error('name') border-red-500 @else border-gray-200 @enderror focus:outline-none focus:ring-2 focus:ring-indigo-500"
              placeholder="John Doe">
            @error('name')
              <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <!-- Contact Information Section -->
        <div class="bg-gray-50 p-6 rounded-lg mb-6">
          <h2 class="text-lg font-semibold mb-4 text-gray-800">Contact Information</h2>
          <div class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2" for="email">Email Address</label>
              <input type="email" id="email" name="email" value="{{ old('email') }}"
                class="w-full px-4 py-3 rounded-lg border @error('email') border-red-500 @else border-gray-200 @enderror focus:outline-none focus:ring-2 focus:ring-indigo-500"
                placeholder="john@example.com">
              @error('email')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <!-- Account Details Section -->
        <div class="bg-gray-50 p-6 rounded-lg mb-6">
          <h2 class="text-lg font-semibold mb-4 text-gray-800">Account Details</h2>
          <div class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2" for="role">Select Your Role</label>
              <select id="role" name="role" 
                class="w-full px-4 py-3 rounded-lg border @error('role') border-red-500 @else border-gray-200 @enderror focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">Choose your role</option>
                <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>Client</option>
                <option value="developer" {{ old('role') == 'developer' ? 'selected' : '' }}>Developer</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
              </select>
              @error('role')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2" for="password">Password</label>
              <div class="relative">
                <input type="password" id="password" name="password"
                  class="w-full px-4 py-3 rounded-lg border @error('password') border-red-500 @else border-gray-200 @enderror focus:outline-none focus:ring-2 focus:ring-indigo-500"
                  placeholder="Create a strong password">
                <button type="button" onclick="togglePassword('password')"
                  class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                  </svg>
                </button>
              </div>
              <div class="mt-2">
                <div class="password-strength-meter">
                  <div id="strength-meter" class="bg-red-500"></div>
                </div>
                <p class="text-xs text-gray-500 mt-1">Password must contain at least 8 characters, including uppercase, lowercase, numbers, and special characters</p>
              </div>
              @error('password')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2" for="password_confirmation">Confirm Password</label>
              <div class="relative">
                <input type="password" id="password_confirmation" name="password_confirmation"
                  class="w-full px-4 py-3 rounded-lg border @error('password_confirmation') border-red-500 @else border-gray-200 @enderror focus:outline-none focus:ring-2 focus:ring-indigo-500"
                  placeholder="Confirm your password">
                <button type="button" onclick="togglePassword('password_confirmation')"
                  class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                  </svg>
                </button>
              </div>
              @error('password_confirmation')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="flex items-start space-x-3">
          <input type="checkbox" id="terms" name="terms"
            class="mt-1 w-4 h-4 text-indigo-600 rounded border-gray-300 focus:ring-indigo-500">
          <label for="terms" class="text-sm text-gray-600">
            I agree to the 
            <a href="#" class="text-indigo-600 hover:text-indigo-700">Terms of Service</a> 
            and 
            <a href="#" class="text-indigo-600 hover:text-indigo-700">Privacy Policy</a>
          </label>
        </div>
        @error('terms')
          <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror

        <!-- Register Button -->
        <button type="submit" 
          class="w-full bg-indigo-600 text-white px-8 py-4 rounded-lg hover:bg-indigo-700 transition-colors">
          Create Account
        </button>
      </form>

      <p class="mt-8 text-center text-gray-600">
        Already have an account? 
        <a href="/login" class="text-indigo-600 hover:text-indigo-700 font-medium">Sign in</a>
      </p>
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

<!-- Scripts -->
<script>
  AOS.init();

  function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    input.type = input.type === 'password' ? 'text' : 'password';
  }

  // Password strength meter
  document.getElementById('password').addEventListener('input', function(e) {
    const password = e.target.value;
    const meter = document.getElementById('strength-meter');
    let strength = 0;

    // Calculate password strength
    if (password.length >= 8) strength += 25;
    if (password.match(/[A-Z]/)) strength += 25;
    if (password.match(/[0-9]/)) strength += 25;
    if (password.match(/[^A-Za-z0-9]/)) strength += 25;

    // Update meter width and color
    meter.style.width = strength + '%';
    if (strength <= 25) {
      meter.className = 'bg-red-500';
    } else if (strength <= 50) {
      meter.className = 'bg-yellow-500';
    } else if (strength <= 75) {
      meter.className = 'bg-blue-500';
    } else {
      meter.className = 'bg-green-500';
    }
  });
</script>

</body>
</html>
