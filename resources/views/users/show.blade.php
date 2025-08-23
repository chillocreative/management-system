<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - {{ $user->name }} - Management System</title>
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
                                <a href="/users" class="text-foreground font-medium">Users</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center space-x-2 rounded-md border border-input bg-background px-3 py-2 text-sm">
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
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="mb-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-3xl font-bold text-foreground">User Profile</h1>
                            <p class="mt-2 text-muted-foreground">Viewing profile for {{ $user->name }}</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('users.edit', $user) }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                Edit User
                            </a>
                            <a href="{{ route('users.index') }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Back to Users
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Success/Error Messages -->
                @if(session('success'))
                    <div class="mb-6 rounded-md bg-green-50 p-4 border border-green-200">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- User Profile Card -->
                <div class="bg-card rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-border">
                        <h2 class="text-lg font-medium text-foreground">Profile Information</h2>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Basic Information -->
                            <div>
                                <h3 class="text-lg font-medium text-foreground mb-4">Basic Information</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Name</label>
                                        <p class="text-sm text-foreground">{{ $user->name }}</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Email</label>
                                        <p class="text-sm text-foreground">{{ $user->email }}</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Role</label>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $user->role === 'admin' ? 'bg-purple-100 text-purple-800' : 'bg-blue-100 text-blue-800' }}">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Status</label>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $user->is_verified ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $user->is_verified ? 'Verified' : 'Pending Verification' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Account Information -->
                            <div>
                                <h3 class="text-lg font-medium text-foreground mb-4">Account Information</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">User ID</label>
                                        <p class="text-sm text-foreground font-mono">{{ $user->id }}</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Member Since</label>
                                        <p class="text-sm text-foreground">{{ $user->created_at->format('F d, Y \a\t g:i A') }}</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Last Updated</label>
                                        <p class="text-sm text-foreground">{{ $user->updated_at->format('F d, Y \a\t g:i A') }}</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Email Verified</label>
                                        <p class="text-sm text-foreground">{{ $user->email_verified_at ? $user->email_verified_at->format('F d, Y \a\t g:i A') : 'Not verified' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Avatar Section -->
                        <div class="mt-8 pt-6 border-t border-border">
                            <h3 class="text-lg font-medium text-foreground mb-4">Profile Avatar</h3>
                            <div class="flex items-center space-x-4">
                                <div class="h-20 w-20 rounded-full bg-primary flex items-center justify-center">
                                    <span class="text-primary-foreground font-medium text-2xl">{{ substr($user->name, 0, 2) }}</span>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">This is the user's profile avatar</p>
                                    <p class="text-xs text-muted-foreground mt-1">Generated from the first two letters of their name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
