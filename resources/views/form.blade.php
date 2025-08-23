<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example - Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-background text-foreground">
    <div class="min-h-full">
        <!-- Navigation -->
        <nav class="border-b bg-card">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 justify-between">
                    <div class="flex">
                        <div class="flex flex-shrink-0 items-center">
                            <a href="/" class="text-xl font-bold text-card-foreground hover:text-primary transition-colors">Management System</a>
                        </div>
                        <div class="hidden md:ml-6 md:flex md:space-x-8">
                            <a href="/" class="text-muted-foreground hover:text-foreground transition-colors px-3 py-2 text-sm font-medium">Home</a>
                            <a href="/dashboard" class="text-muted-foreground hover:text-foreground transition-colors px-3 py-2 text-sm font-medium">Dashboard</a>
                            <a href="/form" class="text-primary border-b-2 border-primary px-3 py-2 text-sm font-medium">Forms</a>
                        </div>
                    </div>
                    <!-- User Profile -->
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <button class="flex items-center space-x-2 rounded-md border border-input bg-background px-3 py-2 text-sm hover:bg-accent hover:text-accent-foreground transition-colors">
                                <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center">
                                    <span class="text-primary-foreground font-medium text-sm">{{ substr(auth()->user()->name, 0, 2) }}</span>
                                </div>
                                <div class="hidden md:block text-left">
                                    <p class="text-sm font-medium">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-muted-foreground">{{ auth()->user()->email }}</p>
                                </div>
                                <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Logout Button -->
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 px-3">
                                <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            <div class="mx-auto max-w-2xl py-6 sm:px-6 lg:px-8">
                <!-- Page Header -->
                <div class="px-4 py-6 sm:px-0">
                    <h2 class="text-2xl font-bold tracking-tight text-foreground">User Registration Form</h2>
                    <p class="mt-1 text-sm text-muted-foreground">
                        This form demonstrates Shadcn/ui components with Laravel.
                    </p>
                </div>

                <!-- Form -->
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="p-6">
                        <form class="space-y-6">
                            <!-- Personal Information Section -->
                            <div>
                                <h3 class="text-lg font-semibold leading-none tracking-tight mb-4">Personal Information</h3>
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label for="first_name" class="block text-sm font-medium text-foreground mb-2">First Name</label>
                                        <input type="text" id="first_name" name="first_name" 
                                               class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                               placeholder="Enter your first name">
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium text-foreground mb-2">Last Name</label>
                                        <input type="text" id="last_name" name="last_name" 
                                               class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                               placeholder="Enter your last name">
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Information Section -->
                            <div>
                                <h3 class="text-lg font-semibold leading-none tracking-tight mb-4">Contact Information</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-foreground mb-2">Email Address</label>
                                        <input type="email" id="email" name="email" 
                                               class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                               placeholder="Enter your email address">
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-foreground mb-2">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" 
                                               class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                               placeholder="Enter your phone number">
                                    </div>
                                </div>
                            </div>

                            <!-- Account Information Section -->
                            <div>
                                <h3 class="text-lg font-semibold leading-none tracking-tight mb-4">Account Information</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label for="username" class="block text-sm font-medium text-foreground mb-2">Username</label>
                                        <input type="text" id="username" name="username" 
                                               class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                               placeholder="Choose a username">
                                    </div>
                                    <div>
                                        <label for="password" class="block text-sm font-medium text-foreground mb-2">Password</label>
                                        <input type="password" id="password" name="password" 
                                               class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                               placeholder="Create a password">
                                    </div>
                                    <div>
                                        <label for="confirm_password" class="block text-sm font-medium text-foreground mb-2">Confirm Password</label>
                                        <input type="password" id="confirm_password" name="confirm_password" 
                                               class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                               placeholder="Confirm your password">
                                    </div>
                                </div>
                            </div>

                            <!-- Preferences Section -->
                            <div>
                                <h3 class="text-lg font-semibold leading-none tracking-tight mb-4">Preferences</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label for="role" class="block text-sm font-medium text-foreground mb-2">Role</label>
                                        <select id="role" name="role" 
                                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                                            <option value="">Select a role</option>
                                            <option value="user">User</option>
                                            <option value="admin">Administrator</option>
                                            <option value="manager">Manager</option>
                                            <option value="editor">Editor</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="checkbox" id="newsletter" name="newsletter" 
                                               class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                        <label for="newsletter" class="text-sm text-foreground">Subscribe to newsletter</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="checkbox" id="terms" name="terms" 
                                               class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                        <label for="terms" class="text-sm text-foreground">I agree to the terms and conditions</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Form Actions -->
                            <div class="flex justify-end space-x-4 pt-6 border-t">
                                <button type="button" 
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                    Cancel
                                </button>
                                <button type="submit" 
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                    Create Account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
