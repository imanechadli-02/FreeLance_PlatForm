<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - FreelancePro</title>
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
            <p class="text-gray-600 mt-2">Reset your password</p>
        </div>

        <!-- Reset Form -->
        <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
            <!-- Instructions -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Create New Password</h2>
                <p class="text-gray-600">Please enter your new password below.</p>
            </div>

            <!-- Form -->
            <form class="space-y-6">
                <!-- New Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               placeholder="Enter new password" 
                               class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                               required>
                    </div>
                    <!-- Password Requirements -->
                    <div class="mt-2 text-sm text-gray-600">
                        <p class="font-medium mb-1">Password Requirements:</p>
                        <ul class="space-y-1">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                At least 8 characters
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Include uppercase and lowercase letters
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Include at least one number
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Include at least one special character
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-2">Confirm New Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input type="password" 
                               id="confirm-password" 
                               name="confirm-password" 
                               placeholder="Confirm new password" 
                               class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                               required>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-indigo-600 text-white py-3 px-4 rounded-lg hover:bg-indigo-700 transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Reset Password
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