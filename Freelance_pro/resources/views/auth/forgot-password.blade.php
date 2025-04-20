<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - FreelancePro</title>
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
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <!-- Main Content -->
    <div class="w-full max-w-md mx-auto px-6 py-12">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="text-3xl font-bold gradient-text">FreelancePro</div>
            <p class="text-gray-600 mt-2">Recover your password</p>
        </div>

        <!-- Recovery Form -->
        <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
            <!-- Instructions -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Forgot your password?</h2>
                <p class="text-gray-600">Enter your email address and we'll send you instructions to reset your password.</p>
            </div>

            <!-- Form -->
            <form class="space-y-6">
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               placeholder="Enter your email" 
                               class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                               required>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-indigo-600 text-white py-3 px-4 rounded-lg hover:bg-indigo-700 transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Send Reset Instructions
                </button>

                <!-- Back to Login -->
                <div class="text-center">
                    <a href="/login" class="text-sm text-indigo-600 hover:text-indigo-500">
                        Back to Login
                    </a>
                </div>
            </form>
        </div>

        <!-- Additional Info -->
        <div class="mt-8 text-center text-sm text-gray-600">
            <p>Need help? <a href="#" class="text-indigo-600 hover:text-indigo-500">Contact Support</a></p>
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