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
                        <a href="/register" class="font-semibold text-primary hover:text-primary/90 transition-colors">
                            Create a new account
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
