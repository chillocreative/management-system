<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - {{ $user->name }} - Management System</title>
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
                            <h1 class="text-3xl font-bold text-foreground">Edit User</h1>
                            <p class="mt-2 text-muted-foreground">Editing profile for {{ $user->name }}</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('users.show', $user) }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                View User
                            </a>
                            <a href="{{ route('users.index') }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Back to Users
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Edit Form -->
                <div class="bg-card rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-border">
                        <h2 class="text-lg font-medium text-foreground">Edit User Information</h2>
                    </div>
                    <form method="POST" action="{{ route('users.update', $user) }}" class="p-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Basic Information -->
                            <div class="space-y-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-foreground mb-2">Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required
                                           class="w-full px-3 py-2 border border-input rounded-md bg-background text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-foreground mb-2">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required
                                           class="w-full px-3 py-2 border border-input rounded-md bg-background text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Role and Status -->
                            <div class="space-y-4">
                                <div>
                                    <label for="role" class="block text-sm font-medium text-foreground mb-2">Role</label>
                                    <select name="role" id="role" required
                                            class="w-full px-3 py-2 border border-input rounded-md bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent">
                                        <option value="user" {{ old('role', $user->role) === 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
                                    </select>
                                    @error('role')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="is_verified" value="1" {{ old('is_verified', $user->is_verified) ? 'checked' : '' }}
                                               class="rounded border-input text-primary focus:ring-ring focus:ring-offset-2">
                                        <span class="text-sm font-medium text-foreground">Email Verified</span>
                                    </label>
                                    <p class="mt-1 text-xs text-muted-foreground">Check this if the user's email has been verified</p>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="mt-8 pt-6 border-t border-border flex items-center justify-end space-x-3">
                            <a href="{{ route('users.show', $user) }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Cancel
                            </a>
                            <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                Update User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
