<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File - Management System</title>
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
                        <a href="/files" class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="h-2 w-2 bg-blue-500 rounded-full"></div>
                            <span>Files</span>
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
                        <h1 class="text-2xl font-bold text-gray-800">Upload File</h1>
                        <p class="text-gray-600">Add a new file to your collection</p>
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
                            <h2 class="text-xl font-semibold text-gray-800">Upload New File</h2>
                            <p class="mt-1 text-gray-600">Fill in the details below to upload your file</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('files.index') }}" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Back to Files
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Upload Form -->
                <div class="max-w-2xl">
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-6">
                        <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Title Field -->
                            <div class="mb-6">
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">File Title *</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" required
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
                                          placeholder="Optional: Add a description for your file">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- File Upload Field -->
                            <div class="mb-6">
                                <label for="file" class="block text-sm font-medium text-gray-700 mb-2">Select File *</label>
                                
                                <!-- Simple visible file input for better compatibility -->
                                <div class="mt-2">
                                    <input type="file" name="file" id="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100 border border-gray-300 rounded-lg p-3" required>
                                </div>
                                
                                <p class="mt-2 text-xs text-gray-500">PNG, JPG, PDF, DOC, XLS up to 10MB</p>
                                
                                @error('file')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                
                                <!-- Debug Info -->
                                @if(session('error'))
                                    <div class="mt-2 p-3 bg-red-100 border border-red-300 rounded-md">
                                        <p class="text-sm text-red-700">{{ session('error') }}</p>
                                    </div>
                                @endif
                                
                                @if($errors->any())
                                    <div class="mt-2 p-3 bg-red-100 border border-red-300 rounded-md">
                                        <ul class="text-sm text-red-700">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <!-- Submit Button -->
                            <div class="flex items-center justify-end space-x-3">
                                <a href="{{ route('files.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    Cancel
                                </a>
                                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-md text-sm font-medium hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    <svg class="h-4 w-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    Upload File
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // File upload validation
        document.getElementById('file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            
            if (file) {
                // Validate file size (10MB = 10 * 1024 * 1024 bytes)
                const maxSize = 10 * 1024 * 1024;
                if (file.size > maxSize) {
                    alert('File size must be less than 10MB');
                    this.value = '';
                    return;
                }
                
                console.log('File selected:', file.name, 'Size:', (file.size / 1024 / 1024).toFixed(2) + ' MB');
            }
        });
        
        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const fileInput = document.getElementById('file');
            const titleInput = document.getElementById('title');
            
            console.log('Form submitted with file:', fileInput.files[0], 'Title:', titleInput.value);
            
            if (!fileInput.files[0]) {
                e.preventDefault();
                alert('Please select a file to upload');
                return;
            }
            
            if (!titleInput.value.trim()) {
                e.preventDefault();
                alert('Please enter a title for the file');
                return;
            }
        });
    </script>
</body>
</html>
