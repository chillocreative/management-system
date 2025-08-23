<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-gray-50 dark:bg-gray-900 transition-colors">
    <div class="min-h-full flex">
        <!-- Left Sidebar Navigation -->
        <aside class="w-64 bg-card border-r border-border min-h-screen transition-colors">
            <div class="p-6">
                <!-- Logo -->
                <div class="flex items-center space-x-3 mb-8">
                    <div class="h-8 w-8 rounded-lg bg-purple-600 flex items-center justify-center">
                        <span class="text-white font-bold text-lg">MS</span>
                    </div>
                    <span class="text-xl font-bold text-card-foreground">Management System</span>
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-2">
                    <!-- Dashboard -->
                    <div class="space-y-1">
                        <a href="/dashboard" class="flex items-center space-x-3 px-3 py-2 text-sm text-muted-foreground hover:text-foreground hover:bg-accent rounded-lg transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </div>

                    <!-- Files -->
                    <div class="space-y-1">
                        <a href="/files" class="flex items-center space-x-3 px-3 py-2 text-sm text-muted-foreground hover:text-foreground hover:bg-accent rounded-lg transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span>Files</span>
                        </a>
                    </div>

                    <!-- Profile -->
                    <div class="space-y-1">
                        <a href="/my-profile" class="flex items-center space-x-3 px-3 py-2 text-sm font-medium text-purple-600 bg-purple-50 rounded-lg">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Profile</span>
                        </a>
                    </div>

                    @if(auth()->user()->role === 'admin')
                    <!-- Users (Admin Only) -->
                    <div class="space-y-1">
                        <a href="/users" class="flex items-center space-x-3 px-3 py-2 text-sm text-muted-foreground hover:text-foreground hover:bg-accent rounded-lg transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                            <span>Users</span>
                        </a>
                    </div>
                    @endif
                </nav>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Top Header -->
            <header class="bg-card border-b border-border px-6 py-4 transition-colors">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-foreground">My Profile</h1>
                        <p class="text-muted-foreground">Manage your account information and settings</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Dark Mode Toggle -->
                        <div class="relative">
                            <button id="darkModeToggle" class="relative p-2 text-muted-foreground hover:text-foreground focus:outline-none transition-colors" title="Toggle Dark Mode">
                                <!-- Sun Icon (Light Mode) -->
                                <svg id="sunIcon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <!-- Moon Icon (Dark Mode) -->
                                <svg id="moonIcon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- User Profile -->
                        <div class="flex items-center space-x-3">
                            <div class="h-10 w-10 rounded-full bg-purple-600 flex items-center justify-center">
                                <span class="text-white font-medium text-sm">{{ substr(auth()->user()->name, 0, 2) }}</span>
                            </div>
                            <div class="hidden md:block">
                                <p class="text-sm font-medium text-foreground">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-muted-foreground">{{ auth()->user()->email }}</p>
                            </div>
                        </div>

                        <!-- Logout Button -->
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="inline-flex items-center justify-center px-3 py-2 border border-input rounded-md text-sm font-medium text-foreground bg-background hover:bg-accent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ring">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                <!-- Page Header -->
                <div class="mb-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-semibold text-foreground">Profile Information</h2>
                            <p class="mt-1 text-muted-foreground">Manage your account information and settings</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('profile.edit-profile') }}" class="inline-flex items-center justify-center px-4 py-2 bg-primary text-primary-foreground rounded-md text-sm font-medium hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ring">
                                Edit Profile
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

                <!-- Profile Information -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Profile Card -->
                    <div class="lg:col-span-2">
                        <div class="bg-card rounded-lg shadow">
                            <div class="px-6 py-4 border-b border-border">
                                <h2 class="text-lg font-medium text-foreground">Profile Information</h2>
                            </div>
                            <div class="p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Member Since</label>
                                        <p class="text-sm text-foreground">{{ $user->created_at->format('F d, Y') }}</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-muted-foreground mb-1">Last Updated</label>
                                        <p class="text-sm text-foreground">{{ $user->updated_at->format('F d, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Profile Avatar -->
                        <div class="bg-card rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-foreground mb-4">Profile Avatar</h3>
                            <div class="flex flex-col items-center space-y-4">
                                <div class="h-24 w-24 rounded-full bg-primary flex items-center justify-center">
                                    <span class="text-primary-foreground font-medium text-3xl">{{ substr($user->name, 0, 2) }}</span>
                                </div>
                                <p class="text-sm text-muted-foreground text-center">Generated from your name initials</p>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="bg-card rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-foreground mb-4">Quick Actions</h3>
                            <div class="space-y-3">
                                <a href="{{ route('profile.edit-profile') }}" class="w-full inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                    Edit Profile
                                </a>
                                <button onclick="showDeleteAccountModal()" class="w-full inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-destructive bg-background text-destructive hover:bg-destructive hover:text-destructive-foreground h-10 px-4 py-2">
                                    Delete Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Delete Account Modal -->
    <div id="deleteAccountModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-card rounded-lg shadow-xl max-w-md w-full">
                <div class="px-6 py-4 border-b border-border">
                    <h3 class="text-lg font-medium text-foreground">Delete Account</h3>
                </div>
                <div class="px-6 py-4">
                    <p class="text-sm text-muted-foreground mb-4">
                        This action cannot be undone. This will permanently delete your account and remove all your data.
                    </p>
                    <form method="POST" action="{{ route('profile.delete-account') }}" class="space-y-4">
                        @csrf
                        <div>
                            <label for="password" class="block text-sm font-medium text-foreground mb-2">Confirm Password</label>
                            <input type="password" name="password" id="password" required
                                   class="w-full px-3 py-2 border border-input rounded-md bg-background text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent"
                                   placeholder="Enter your password to confirm">
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end space-x-3">
                            <button type="button" onclick="hideDeleteAccountModal()" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-destructive text-destructive-foreground hover:bg-destructive/90 h-10 px-4 py-2">
                                Delete Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Dark Mode Script -->
    <script>
        // Dark mode functionality
        const darkModeToggle = document.getElementById('darkModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        
        // Check for saved theme preference or default to light mode
        const currentTheme = localStorage.getItem('theme') || 'light';
        
        // Set initial theme
        if (currentTheme === 'dark') {
            document.documentElement.classList.add('dark');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        }
        
        // Toggle dark mode
        darkModeToggle.addEventListener('click', function() {
            const isDark = document.documentElement.classList.contains('dark');
            
            if (isDark) {
                // Switch to light mode
                document.documentElement.classList.remove('dark');
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
                localStorage.setItem('theme', 'light');
            } else {
                // Switch to dark mode
                document.documentElement.classList.add('dark');
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
                localStorage.setItem('theme', 'dark');
            }
        });
    </script>

    <script>
        function showDeleteAccountModal() {
            document.getElementById('deleteAccountModal').classList.remove('hidden');
        }

        function hideDeleteAccountModal() {
            document.getElementById('deleteAccountModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('deleteAccountModal').addEventListener('click', function(e) {
            if (e.target === this) {
                hideDeleteAccountModal();
            }
        });
    </script>
</body>
</html>
