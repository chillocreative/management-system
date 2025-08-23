<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{ $file->title }} - Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-gray-50">
    <div class="min-h-full flex">
        <!-- Left Sidebar Navigation -->
        <aside class="w-64 bg-white border-r border-gray-200 min-h-screen">
            <div class="p-6">
                <!-- Logo -->
                <div class="flex items-center space-x-3 mb-8">
                    <div class="h-8 w-8 rounded-lg bg-purple-600 flex items-center justify-center">
                        <span class="text-white font-bold text-lg">MS</span>
                    </div>
                    <span class="text-xl font-bold text-gray-800">Management System</span>
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-2">
                    <!-- Dashboards Section -->
                    <div class="space-y-1">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Dashboards</span>
                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="ml-4 space-y-1">
                            <a href="/dashboard" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </div>
                    </div>

                    <!-- Files Section -->
                    <div class="space-y-1">
                        <a href="/files" class="flex items-center space-x-3 px-3 py-2 text-sm font-medium text-purple-600 bg-purple-50 rounded-lg">
                            <div class="h-2 w-2 bg-blue-500 rounded-full"></div>
                            <span>Files</span>
                            <div class="ml-auto h-2 w-2 bg-red-500 rounded-full"></div>
                        </a>
                    </div>

                    <!-- Analytics Section -->
                    <div class="space-y-1">
                        <a href="#" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="h-2 w-2 bg-gray-400 rounded-full"></div>
                            <span>Analytics</span>
                        </a>
                    </div>

                    <!-- CRM Section -->
                    <div class="space-y-1">
                        <a href="#" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="h-2 w-2 bg-gray-400 rounded-full"></div>
                            <span>CRM</span>
                            <span class="ml-auto text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full">PRO</span>
                        </a>
                    </div>

                    <!-- eCommerce Section -->
                    <div class="space-y-1">
                        <a href="#" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="h-2 w-2 bg-gray-400 rounded-full"></div>
                            <span>eCommerce</span>
                            <span class="ml-auto text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full">PRO</span>
                        </a>
                    </div>

                    <!-- Users Section -->
                    @if(auth()->user()->role === 'admin')
                    <div class="space-y-1">
                        <a href="/users" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="h-2 w-2 bg-gray-400 rounded-full"></div>
                            <span>Users</span>
                        </a>
                    </div>
                    @endif

                    <!-- Forms Section -->
                    <div class="space-y-1">
                        <a href="/form" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="h-2 w-2 bg-gray-400 rounded-full"></div>
                            <span>Forms</span>
                            <svg class="ml-auto h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Profile Section -->
                    <div class="space-y-1">
                        <a href="/my-profile" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="h-2 w-2 bg-gray-400 rounded-full"></div>
                            <span>Profile</span>
                            <svg class="ml-auto h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-200 my-4"></div>

                    <!-- Apps & Pages Section -->
                    <div class="space-y-1">
                        <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Apps & Pages</span>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>Email</span>
                            <span class="ml-auto text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full">PRO</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <span>Chat</span>
                            <span class="ml-auto text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full">PRO</span>
                        </a>
                    </div>
                </nav>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Top Header -->
            <header class="bg-white border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Edit File</h1>
                        <p class="text-gray-600">Update file information</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <div class="relative">
                            <button class="relative p-2 text-gray-400 hover:text-gray-600 focus:outline-none">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                                <span class="absolute top-0 right-0 h-5 w-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
                            </button>
                        </div>

                        <!-- User Profile -->
                        <div class="flex items-center space-x-3">
                            <div class="h-10 w-10 rounded-full bg-purple-600 flex items-center justify-center">
                                <span class="text-white font-medium text-sm">{{ substr(auth()->user()->name, 0, 2) }}</span>
                            </div>
                            <div class="hidden md:block">
                                <p class="text-sm font-medium text-gray-700">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                            </div>
                        </div>

                        <!-- Logout Button -->
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="inline-flex items-center justify-center px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
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
                            <h2 class="text-xl font-semibold text-gray-800">Edit {{ $file->title }}</h2>
                            <p class="mt-1 text-gray-600">Update file title and description</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('files.show', $file) }}" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Back to File
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Edit Form -->
                <div class="max-w-2xl">
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-6">
                        <form action="{{ route('files.update', $file) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <!-- Title Field -->
                            <div class="mb-6">
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">File Title *</label>
                                <input type="text" id="title" name="title" value="{{ old('title', $file->title) }}" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                       placeholder="Enter a descriptive title for your file">
                                @error('title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Description Field -->
                            <div class="mb-6">
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                <textarea id="description" name="description" rows="3"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                          placeholder="Optional: Add a description for your file">{{ old('description', $file->description) }}</textarea>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- File Information (Read-only) -->
                            <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                                <h4 class="text-sm font-medium text-gray-700 mb-3">File Information (Read-only)</h4>
                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div>
                                        <span class="text-gray-500">Original Filename:</span>
                                        <span class="ml-2 text-gray-900">{{ $file->original_filename }}</span>
                                    </div>
                                    <div>
                                        <span class="text-gray-500">File Type:</span>
                                        <span class="ml-2 text-gray-900">{{ $file->mime_type }}</span>
                                    </div>
                                    <div>
                                        <span class="text-gray-500">File Size:</span>
                                        <span class="ml-2 text-gray-900">{{ $file->formatted_size }}</span>
                                    </div>
                                    <div>
                                        <span class="text-gray-500">Uploaded:</span>
                                        <span class="ml-2 text-gray-900">{{ $file->created_at->format('M d, Y') }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Buttons -->
                            <div class="flex items-center justify-end space-x-3">
                                <a href="{{ route('files.show', $file) }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    Cancel
                                </a>
                                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-md text-sm font-medium hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    <svg class="h-4 w-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Update File
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
