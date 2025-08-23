<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-background text-foreground">
    <div class="min-h-full">
        <!-- Top Navigation -->
        <nav class="border-b bg-card shadow-sm">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 justify-between items-center">
                    <div class="flex items-center space-x-8">
                        <a href="/" class="text-2xl font-bold text-primary">Management System</a>
                        <div class="hidden md:block">
                            <div class="flex items-center space-x-6">
                                <a href="/" class="text-muted-foreground hover:text-foreground transition-colors">Home</a>
                                <a href="/dashboard" class="text-muted-foreground hover:text-foreground transition-colors">Dashboard</a>
                                <a href="/form" class="text-muted-foreground hover:text-foreground transition-colors">Forms</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="/login" class="text-sm text-muted-foreground hover:text-foreground transition-colors">Login</a>
                        <a href="/register" class="text-sm text-muted-foreground hover:text-foreground transition-colors">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Forgot Password Form -->
        <main>
            <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-foreground">
                        Forgot your password?
                    </h2>
                    <p class="mt-2 text-center text-sm leading-6 text-muted-foreground">
                        No worries! Enter your email address and we'll send you a reset link.
                    </p>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
                    <div class="bg-card px-6 py-12 shadow sm:rounded-lg sm:px-12">
                        <!-- Success Message (hidden by default) -->
                        <div id="success-message" class="hidden mb-6 rounded-md bg-green-50 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800">
                                        Reset link sent! Check your email for further instructions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Forgot Password Form -->
                        <form class="space-y-6" action="#" method="POST" id="forgot-password-form">
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-foreground">
                                    Email address
                                </label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required 
                                           class="block w-full rounded-md border-0 py-1.5 text-foreground shadow-sm ring-1 ring-inset ring-border placeholder:text-muted-foreground focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 bg-background px-3">
                                </div>
                            </div>

                            <div>
                                <button type="submit" 
                                        class="flex w-full justify-center rounded-md bg-primary px-3 py-1.5 text-sm font-semibold leading-6 text-primary-foreground shadow-sm hover:bg-primary/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-colors">
                                    Send reset link
                                </button>
                            </div>
                        </form>

                        <!-- Back to Login -->
                        <div class="mt-6 text-center">
                            <p class="text-sm text-muted-foreground">
                                Remember your password? 
                                <a href="/login" class="font-semibold text-primary hover:text-primary/90 transition-colors">
                                    Back to login
                                </a>
                            </p>
                        </div>

                        <!-- Additional Help -->
                        <div class="mt-6 border-t border-border pt-6">
                            <div class="text-center">
                                <p class="text-sm text-muted-foreground">
                                    Need additional help? Contact our support team at
                                    <a href="mailto:support@managementsys.com" class="font-semibold text-primary hover:text-primary/90 transition-colors">
                                        support@managementsys.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Simple form handling for demo purposes
        document.getElementById('forgot-password-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Hide the form and show success message
            document.getElementById('forgot-password-form').classList.add('hidden');
            document.getElementById('success-message').classList.remove('hidden');
            
            // In a real application, you would send the form data to your backend
            console.log('Password reset requested for:', document.getElementById('email').value);
        });
    </script>
</body>
</html>
