<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management System - Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-background text-foreground">
    <div class="min-h-full">
        <!-- Top Navigation -->
        <nav class="border-b bg-card shadow-sm">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 justify-between items-center">
                    <!-- Logo and Menu -->
                    <div class="flex items-center space-x-8">
                        <div class="flex-shrink-0">
                            <h1 class="text-2xl font-bold text-primary">Management System</h1>
                        </div>
                        
                        <!-- Main Menu -->
                        <div class="hidden md:block">
                            <div class="flex items-center space-x-6">
                                <a href="/" class="text-foreground hover:text-primary transition-colors font-medium">Home</a>
                                <a href="/dashboard" class="text-muted-foreground hover:text-foreground transition-colors">Dashboard</a>
                                <a href="/form" class="text-muted-foreground hover:text-foreground transition-colors">Forms</a>
                            </div>
                        </div>
                    </div>

                    <!-- Authentication Buttons -->
                    <div class="flex items-center space-x-4">
                        @auth
                            <!-- User is logged in -->
                            <div class="flex items-center space-x-3">
                                <div class="flex items-center space-x-2 rounded-md border border-input bg-background px-3 py-2 text-sm hover:bg-accent hover:text-accent-foreground transition-colors">
                                    <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center">
                                        <span class="text-primary-foreground font-medium text-sm">{{ substr(auth()->user()->name, 0, 2) }}</span>
                                    </div>
                                    <div class="hidden md:block text-left">
                                        <p class="text-sm font-medium">{{ auth()->user()->name }}</p>
                                        <p class="text-xs text-muted-foreground">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                
                                <a href="/dashboard" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                    Dashboard
                                </a>
                                
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        @else
                            <!-- User is not logged in -->
                            <a href="/login" 
                               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Login
                            </a>
                            <a href="/register" 
                               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                Sign Up
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <main>
            <div class="relative isolate">
                <!-- Background decoration -->
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-primary to-primary/20 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
                </div>

                <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-foreground sm:text-6xl">
                            Welcome to <span class="text-primary">Management System</span>
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-muted-foreground">
                            Streamline your business operations with our comprehensive management solution. 
                            From user management to project tracking, we've got you covered.
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            @auth
                                <!-- User is logged in -->
                                <a href="/dashboard" 
                                   class="rounded-md bg-primary px-6 py-3 text-lg font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 transition-colors">
                                    Go to Dashboard
                                </a>
                                <a href="/form" 
                                   class="text-lg font-semibold leading-6 text-foreground hover:text-primary transition-colors">
                                    View Forms <span aria-hidden="true">→</span>
                                </a>
                                <a href="/profile" 
                                   class="text-lg font-semibold leading-6 text-foreground hover:text-primary transition-colors">
                                    Profile <span aria-hidden="true">→</span>
                                </a>
                            @else
                                <!-- User is not logged in -->
                                <a href="/register" 
                                   class="rounded-md bg-primary px-6 py-3 text-lg font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 transition-colors">
                                    Get Started
                                </a>
                                <a href="/login" 
                                   class="text-lg font-semibold leading-6 text-foreground hover:text-primary transition-colors">
                                    Sign In <span aria-hidden="true">→</span>
                                </a>
                                <a href="/dashboard" 
                                   class="text-lg font-semibold leading-6 text-foreground hover:text-primary transition-colors">
                                    View Demo <span aria-hidden="true">→</span>
                                </a>
                                <a href="/form" 
                                   class="text-lg font-semibold leading-6 text-foreground hover:text-primary transition-colors">
                                    Learn More <span aria-hidden="true">→</span>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="mx-auto max-w-7xl px-6 pb-24 sm:pb-32 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:text-center">
                        <h2 class="text-base font-semibold leading-7 text-primary">Powerful Features</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-foreground sm:text-4xl">
                            Everything you need to manage your business
                        </p>
                    </div>
                    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                            <div class="flex flex-col">
                                <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-foreground">
                                    <div class="h-5 w-5 flex-none text-primary" aria-hidden="true">📊</div>
                                    Dashboard Analytics
                                </dt>
                                <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-muted-foreground">
                                    <p class="flex-auto">Get real-time insights into your business performance with our comprehensive dashboard.</p>
                                </dd>
                            </div>
                            <div class="flex flex-col">
                                <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-foreground">
                                    <div class="h-5 w-5 flex-none text-primary" aria-hidden="true">👥</div>
                                    User Management
                                </dt>
                                <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-muted-foreground">
                                    <p class="flex-auto">Easily manage users, roles, and permissions with our intuitive user management system.</p>
                                </dd>
                            </div>
                            <div class="flex flex-col">
                                <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-foreground">
                                    <div class="h-5 w-5 flex-none text-primary" aria-hidden="true">📝</div>
                                    Form Builder
                                </dt>
                                <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-muted-foreground">
                                    <p class="flex-auto">Create custom forms and workflows to streamline your business processes.</p>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="border-t bg-card">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 md:order-2">
                    <p class="text-center text-xs leading-5 text-muted-foreground">
                        &copy; 2024 Management System. All rights reserved.
                    </p>
                </div>
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-muted-foreground">
                        Built with Laravel 12 & Shadcn/ui
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
