<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Management System</title>
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
                        <a href="/login" class="text-sm font-medium text-primary">Login</a>
                        <a href="/register" class="text-sm text-muted-foreground hover:text-foreground transition-colors">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Login Form -->
        <main>
            <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-foreground">
                        Sign in to your account
                    </h2>
                    <p class="mt-2 text-center text-sm leading-6 text-muted-foreground">
                        Or
                        <a href="/register" class="font-semibold text-primary hover:text-primary/90 transition-colors">
                            create a new account
                        </a>
                    </p>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
                    <div class="bg-card px-6 py-12 shadow sm:rounded-lg sm:px-12">
                        <!-- Error Alert (hidden by default) -->
                        <div id="error-alert" class="hidden mb-6 rounded-md bg-red-50 p-4 border border-red-200">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p id="error-message" class="text-sm font-medium text-red-800">
                                        An error occurred. Please try again.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Login -->
                        <div class="space-y-4">
                            <button type="button" 
                                    class="flex w-full items-center justify-center gap-3 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors"
                                    onclick="handleSocialLogin('google')">
                                <svg class="h-5 w-5" viewBox="0 0 24 24">
                                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                </svg>
                                Continue with Google
                            </button>
                            
                            <button type="button" 
                                    class="flex w-full items-center justify-center gap-3 rounded-md bg-[#1877F2] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-[#1877F2]/90 transition-colors"
                                    onclick="handleSocialLogin('facebook')">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                Continue with Facebook
                            </button>
                            
                            <button type="button" 
                                    class="flex w-full items-center justify-center gap-3 rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/90 transition-colors"
                                    onclick="handleSocialLogin('twitter')">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                                Continue with Twitter
                            </button>
                        </div>

                        <!-- Divider -->
                        <div class="relative my-8">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-border"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="bg-card px-2 text-muted-foreground">Or continue with email</span>
                            </div>
                        </div>

                        <!-- Email Login Form -->
                        <form class="space-y-6" method="POST" action="{{ route('login') }}" id="login-form">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-foreground">
                                    Email address
                                </label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required 
                                           value="{{ old('email') }}"
                                           class="block w-full rounded-md border-0 py-1.5 text-foreground shadow-sm ring-1 ring-inset ring-border placeholder:text-muted-foreground focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 bg-background px-3 @error('email') ring-red-500 @enderror">
                                </div>
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium leading-6 text-foreground">
                                    Password
                                </label>
                                <div class="mt-2">
                                    <input id="password" name="password" type="password" autocomplete="current-password" required 
                                           class="block w-full rounded-md border-0 py-1.5 text-foreground shadow-sm ring-1 ring-inset ring-border placeholder:text-muted-foreground focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 bg-background px-3 @error('password') ring-red-500 @enderror">
                                </div>
                                @error('password')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember" name="remember" type="checkbox" 
                                           class="h-4 w-4 rounded border-border text-primary focus:ring-primary"
                                           {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="ml-3 block text-sm leading-6 text-foreground">
                                        Remember me
                                    </label>
                                </div>

                                <div class="text-sm leading-6">
                                    <a href="{{ route('password.request') }}" class="font-semibold text-primary hover:text-primary/90 transition-colors">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>

                            <div>
                                <button type="submit" 
                                        class="flex w-full justify-center items-center gap-2 rounded-md bg-primary px-3 py-1.5 text-sm font-semibold leading-6 text-primary-foreground shadow-sm hover:bg-primary/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                                        id="login-button">
                                    <span id="login-text">Sign in</span>
                                    <div id="login-spinner" class="hidden h-4 w-4 animate-spin rounded-full border-2 border-current border-t-transparent"></div>
                                </button>
                            </div>
                        </form>

                        <!-- Sign Up Link -->
                        <div class="mt-6 text-center">
                            <p class="text-sm text-muted-foreground">
                                Don't have an account? 
                                <a href="/register" class="font-semibold text-primary hover:text-primary/90 transition-colors">
                                    Sign up here
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Form handling
        document.getElementById('login-form').addEventListener('submit', function(e) {
            // Let the form submit naturally to Laravel
            // The loading state will be handled by the form submission
            setLoading(true);
        });

        function setLoading(loading) {
            const button = document.getElementById('login-button');
            const text = document.getElementById('login-text');
            const spinner = document.getElementById('login-spinner');

            if (loading) {
                button.disabled = true;
                text.textContent = 'Signing in...';
                spinner.classList.remove('hidden');
            } else {
                button.disabled = false;
                text.textContent = 'Sign in';
                spinner.classList.add('hidden');
            }
        }

        function handleSocialLogin(provider) {
            console.log(`Initiating ${provider} login...`);
            // In a real app, this would redirect to the OAuth provider
            showError(`${provider} login is not yet implemented. Please use email login.`);
        }

        function showError(message) {
            const errorAlert = document.getElementById('error-alert');
            const errorMessage = document.getElementById('error-message');
            
            errorMessage.textContent = message;
            errorAlert.classList.remove('hidden');
        }

        function hideError() {
            const errorAlert = document.getElementById('error-alert');
            errorAlert.classList.add('hidden');
        }

        // Show loading state when form is submitted
        document.addEventListener('DOMContentLoaded', function() {
            // Check if there are validation errors and show them
            @if($errors->any())
                @foreach($errors->all() as $error)
                    showError('{{ $error }}');
                @endforeach
            @endif
        });
    </script>
</body>
</html>
