<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Login Settings - Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Enhanced toggle switch styling */
        .toggle-switch {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        
        .toggle-switch:focus-within {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .toggle-dot {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }
        
        /* Smooth color transitions */
        .toggle-container {
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        
        /* Hover effects - safer approach */
        .toggle-switch:not(.disabled):hover .toggle-container {
            opacity: 0.9;
            transform: scale(1.02);
        }
        
        .toggle-switch:not(.disabled):hover .toggle-dot {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        /* Active state */
        .toggle-switch:active .toggle-dot {
            transform: scale(0.95);
        }
        
        /* Disabled state styling */
        .toggle-switch.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .toggle-switch.disabled .toggle-container {
            background-color: #e5e7eb !important;
        }
        
        .toggle-switch.disabled:hover .toggle-container {
            opacity: 0.5 !important;
            transform: none !important;
        }
    </style>
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
                        <a href="/my-profile" class="flex items-center space-x-3 px-3 py-2 text-sm text-muted-foreground hover:text-foreground hover:bg-accent rounded-lg transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Profile</span>
                        </a>
                    </div>

                    <!-- Users (Admin Only) -->
                    <div class="space-y-1">
                        <a href="/users" class="flex items-center space-x-3 px-3 py-2 text-sm text-muted-foreground hover:text-foreground hover:bg-accent rounded-lg transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                            <span>Users</span>
                        </a>
                    </div>

                    <!-- Settings (Admin Only) -->
                    <div class="space-y-1">
                        <a href="/admin/settings" class="flex items-center space-x-3 px-3 py-2 text-sm font-medium text-purple-600 bg-purple-50 rounded-lg">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Settings</span>
                        </a>
                    </div>
                </nav>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Top Header -->
            <header class="bg-card border-b border-border px-6 py-4 transition-colors">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-foreground">Social Login Settings</h1>
                        <p class="text-muted-foreground">Configure and manage social media login providers</p>
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

                <!-- Settings Form -->
                <div class="bg-card rounded-lg border border-border shadow-sm">
                    <div class="px-6 py-4 border-b border-border">
                        <h2 class="text-lg font-semibold text-foreground">Social Login Providers</h2>
                        <p class="text-sm text-muted-foreground">Configure your social media login providers</p>
                    </div>

                    <form action="{{ route('admin.settings.update') }}" method="POST" class="p-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="space-y-6">
                            @foreach($settings as $setting)
                                <div class="border border-border rounded-lg p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="h-10 w-10 rounded-lg bg-muted flex items-center justify-center">
                                                {!! $setting->icon_svg !!}
                                            </div>
                                            <div>
                                                <h3 class="text-lg font-medium text-foreground">{{ $setting->display_name }}</h3>
                                                <p class="text-sm text-muted-foreground">Configure {{ $setting->display_name }} login</p>
                                            </div>
                                        </div>
                                        
                                        <!-- Status Badge -->
                                        <div class="flex items-center space-x-2">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $setting->status_badge_class }}">
                                                {{ $setting->status_text }}
                                            </span>
                                            @if($setting->is_enabled)
                                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Client ID -->
                                        <div>
                                            <label for="client_id_{{ $setting->provider }}" class="block text-sm font-medium text-foreground mb-2">
                                                Client ID
                                            </label>
                                            <input type="text" 
                                                   id="client_id_{{ $setting->provider }}"
                                                   name="settings[{{ $setting->provider }}][client_id]"
                                                   value="{{ $setting->client_id }}"
                                                   class="w-full px-3 py-2 border border-input rounded-md bg-background text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent"
                                                   placeholder="Enter your {{ $setting->display_name }} Client ID">
                                        </div>

                                        <!-- Client Secret -->
                                        <div>
                                            <label for="client_secret_{{ $setting->provider }}" class="block text-sm font-medium text-foreground mb-2">
                                                Client Secret
                                            </label>
                                            <input type="password" 
                                                   id="client_secret_{{ $setting->provider }}"
                                                   name="settings[{{ $setting->provider }}][client_secret]"
                                                   value="{{ $setting->client_secret }}"
                                                   class="w-full px-3 py-2 border border-input rounded-md bg-background text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent"
                                                   placeholder="Enter your {{ $setting->display_name }} Client Secret">
                                        </div>

                                        <!-- Redirect URL -->
                                        <div class="md:col-span-2">
                                            <label for="redirect_url_{{ $setting->provider }}" class="block text-sm font-medium text-foreground mb-2">
                                                Redirect URL
                                            </label>
                                            <input type="url" 
                                                   id="redirect_url_{{ $setting->provider }}"
                                                   name="settings[{{ $setting->provider }}][redirect_url]"
                                                   value="{{ $setting->redirect_url }}"
                                                   class="w-full px-3 py-2 border border-input rounded-md bg-background text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent"
                                                   placeholder="Enter your {{ $setting->display_name }} Redirect URL">
                                        </div>
                                    </div>

                                    <!-- Hidden Fields -->
                                    <input type="hidden" name="settings[{{ $setting->provider }}][provider]" value="{{ $setting->provider }}">
                                    <input type="hidden" name="settings[{{ $setting->provider }}][is_enabled]" value="0">
                                    
                                    <!-- Action Buttons -->
                                    <div class="flex items-center justify-between mt-6">
                                        <div class="flex items-center space-x-3">
                                            <!-- Enable/Disable Toggle -->
                                            <label class="flex items-center cursor-pointer toggle-switch {{ !$setting->isConfigured() ? 'disabled' : '' }}" data-provider="{{ $setting->provider }}">
                                                <input type="checkbox" 
                                                       name="settings[{{ $setting->provider }}][is_enabled]" 
                                                       value="1"
                                                       {{ $setting->is_enabled ? 'checked' : '' }}
                                                       {{ !$setting->isConfigured() ? 'disabled' : '' }}
                                                       class="sr-only"
                                                       onchange="console.log('Toggle clicked for:', '{{ $setting->provider }}', 'New state:', this.checked); toggleProviderStatus('{{ $setting->provider }}', this.checked)">
                                                <div class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 toggle-container {{ $setting->is_enabled ? 'bg-primary' : 'bg-muted' }}" style="z-index: 1;">
                                                    <span class="inline-block h-4 w-4 transform rounded-full bg-white shadow-sm transition-transform toggle-dot {{ $setting->is_enabled ? 'translate-x-6' : 'translate-x-1' }}" style="z-index: 2;"></span>
                                                </div>
                                            </label>
                                            <span class="text-sm font-medium toggle-status-text {{ $setting->is_enabled ? 'text-primary' : 'text-muted-foreground' }}" title="{{ $setting->is_enabled ? 'Click to disable' : 'Click to enable' }} {{ $setting->display_name }} login">
                                                {{ $setting->is_enabled ? 'Enabled' : 'Disabled' }}
                                            </span>
                                            @if(!$setting->isConfigured())
                                                <svg class="h-4 w-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" title="Provider needs to be configured first">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                                </svg>
                                            @endif
                                        </div>

                                        <div class="flex items-center space-x-2">
                                            <!-- Test Configuration Button -->
                                            <button type="button" 
                                                    onclick="testProvider('{{ $setting->provider }}')"
                                                    class="inline-flex items-center px-3 py-2 border border-input rounded-md text-sm font-medium text-foreground bg-background hover:bg-accent focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                Test
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Save Button -->
                        <div class="flex items-center justify-end pt-6 border-t border-border">
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-primary text-primary-foreground rounded-md text-sm font-medium hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Save Settings
                            </button>
                        </div>
                    </form>
                </div>
            </main>
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

        // Toggle provider status
        function toggleProviderStatus(provider, enabled) {
            console.log('Toggling provider:', provider, 'to:', enabled);
            
            // Check if the toggle is disabled (provider not configured)
            const toggle = document.querySelector(`input[name="settings[${provider}][is_enabled]"]`);
            if (toggle.disabled) {
                showNotification('Please configure the provider first before enabling it', 'error');
                toggle.checked = false;
                return;
            }
            
            fetch(`/admin/settings/${provider}/toggle`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ enabled: enabled })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Response data:', data);
                if (data.success) {
                    // Find the specific provider's toggle elements
                    const providerLabel = document.querySelector(`label[data-provider="${provider}"]`);
                    console.log('Provider label found:', providerLabel);
                    
                    const toggleContainer = providerLabel.querySelector('.toggle-container');
                    const toggleDot = providerLabel.querySelector('.toggle-dot');
                    const statusText = providerLabel.parentElement.querySelector('.toggle-status-text');
                    
                    console.log('Elements found:', { toggleContainer, toggleDot, statusText });
                    
                    if (data.is_enabled) {
                        // Enable the toggle
                        toggleContainer.classList.remove('bg-muted');
                        toggleContainer.classList.add('bg-primary');
                        toggleDot.classList.remove('translate-x-1');
                        toggleDot.classList.add('translate-x-6');
                        statusText.textContent = 'Enabled';
                        statusText.classList.remove('text-muted-foreground');
                        statusText.classList.add('text-primary');
                        
                        // Update the status badge
                        updateStatusBadge(provider, true);
                    } else {
                        // Disable the toggle
                        toggleContainer.classList.remove('bg-primary');
                        toggleContainer.classList.add('bg-muted');
                        toggleDot.classList.remove('translate-x-6');
                        toggleDot.classList.add('translate-x-1');
                        statusText.textContent = 'Disabled';
                        statusText.classList.remove('text-primary');
                        statusText.classList.add('text-muted-foreground');
                        
                        // Update the status badge
                        updateStatusBadge(provider, false);
                    }
                    
                    // Show success message
                    showNotification(data.message, 'success');
                } else {
                    showNotification(data.error || 'An error occurred', 'error');
                    // Revert the toggle
                    toggle.checked = !enabled;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('An error occurred while updating the status', 'error');
                // Revert the toggle
                toggle.checked = !enabled;
            });
        }
        
        // Update status badge
        function updateStatusBadge(provider, isEnabled) {
            const providerCard = document.querySelector(`label[data-provider="${provider}"]`).closest('.border');
            const statusBadge = providerCard.querySelector('.inline-flex');
            const pulseDot = providerCard.querySelector('.animate-pulse');
            
            if (isEnabled) {
                statusBadge.className = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800';
                statusBadge.textContent = 'Active';
                
                // Add pulse dot if it doesn't exist
                if (!pulseDot) {
                    const statusContainer = statusBadge.parentElement;
                    const newPulseDot = document.createElement('div');
                    newPulseDot.className = 'w-2 h-2 bg-green-500 rounded-full animate-pulse';
                    statusContainer.appendChild(newPulseDot);
                }
            } else {
                statusBadge.className = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800';
                statusBadge.textContent = 'Inactive';
                
                // Remove pulse dot
                if (pulseDot) {
                    pulseDot.remove();
                }
            }
        }

        // Test provider configuration
        function testProvider(provider) {
            fetch(`/admin/settings/${provider}/test`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showNotification(data.message, 'success');
                } else {
                    showNotification(data.errors ? data.errors.join(', ') : 'Configuration test failed', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('An error occurred while testing the configuration', 'error');
            });
        }

        // Show notification
        function showNotification(message, type) {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-md shadow-lg ${
                type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
            }`;
            notification.textContent = message;
            
            // Add to page
            document.body.appendChild(notification);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }
    </script>
</body>
</html>
