<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $file->title }} - Management System</title>
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
                        <h1 class="text-2xl font-bold text-gray-800">File Details</h1>
                        <p class="text-gray-600">View and manage file information</p>
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
                            <h2 class="text-xl font-semibold text-gray-800">{{ $file->title }}</h2>
                            <p class="mt-1 text-gray-600">File details and actions</p>
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

                <!-- File Details -->
                <div class="grid gap-6 lg:grid-cols-3">
                    <!-- Main File Information -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-6">
                            <div class="flex items-start space-x-4">
                                <!-- File Icon -->
                                <div class="h-16 w-16 rounded-lg bg-gray-100 flex items-center justify-center flex-shrink-0">
                                    @if($file->file_icon === 'image')
                                        <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    @elseif($file->file_icon === 'pdf')
                                        <svg class="h-8 w-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    @elseif($file->file_icon === 'document')
                                        <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    @else
                                        <svg class="h-8 w-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    @endif
                                </div>

                                <!-- File Details -->
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $file->title }}</h3>
                                    <p class="text-sm text-gray-600 mb-4">{{ $file->description ?: 'No description provided.' }}</p>
                                    
                                    <!-- File Actions -->
                                    <div class="flex items-center space-x-3">
                                        <a href="{{ route('files.download', $file) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                            Download
                                        </a>



                                        @if($file->canEdit(auth()->user()))
                                        <a href="{{ route('files.edit', $file) }}" class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white rounded-md text-sm font-medium hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                            Edit
                                        </a>

                                        <form action="{{ route('files.destroy', $file) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this file?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-md text-sm font-medium hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- File Properties -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">File Properties</h4>
                            
                            <div class="space-y-4">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Original Filename</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $file->original_filename }}</dd>
                                </div>

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">File Type</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $file->mime_type }}</dd>
                                </div>

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">File Size</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $file->formatted_size }}</dd>
                                </div>

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Uploaded By</dt>
                                    <dd class="mt-1">
                                        <div class="flex items-center space-x-2">
                                            <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center">
                                                <span class="text-purple-800 font-medium text-sm">{{ substr($file->user->name, 0, 2) }}</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">{{ $file->user->name }}</p>
                                                <p class="text-xs text-gray-500">{{ $file->user->email }}</p>
                                            </div>
                                        </div>
                                    </dd>
                                </div>

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Upload Date</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $file->created_at->format('F d, Y \a\t g:i A') }}</dd>
                                </div>

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Last Modified</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $file->updated_at->format('F d, Y \a\t g:i A') }}</dd>
                                </div>

                                @if($file->description)
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Description</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $file->description }}</dd>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
