<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLoginSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display the social login settings page
     */
    public function index()
    {
        $settings = SocialLoginSetting::all();
        
        // Get default providers if none exist
        if ($settings->isEmpty()) {
            $settings = $this->getDefaultProviders();
        }

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update social login settings
     */
    public function update(Request $request)
    {
        $request->validate([
            'settings' => 'required|array',
            'settings.*.provider' => 'required|string',
            'settings.*.client_id' => 'nullable|string',
            'settings.*.client_secret' => 'nullable|string',
            'settings.*.redirect_url' => 'nullable|url',
            'settings.*.is_enabled' => 'boolean',
        ]);

        foreach ($request->settings as $settingData) {
            $setting = SocialLoginSetting::updateOrCreate(
                ['provider' => $settingData['provider']],
                [
                    'client_id' => $settingData['client_id'] ?? null,
                    'client_secret' => $settingData['client_secret'] ?? null,
                    'redirect_url' => $settingData['redirect_url'] ?? null,
                    'is_enabled' => $settingData['is_enabled'] ?? false,
                ]
            );
        }

        // Clear cache
        Cache::forget('social_login_settings');

        return redirect()->route('admin.settings.index')
            ->with('success', 'Social login settings updated successfully!');
    }

    /**
     * Toggle a provider's enabled status
     */
    public function toggleStatus(Request $request, $provider)
    {
        $setting = SocialLoginSetting::where('provider', $provider)->first();
        
        if (!$setting) {
            return response()->json(['error' => 'Provider not found'], 404);
        }

        if (!$setting->isConfigured()) {
            return response()->json(['error' => 'Provider must be configured before enabling'], 422);
        }

        $setting->update(['is_enabled' => !$setting->is_enabled]);
        
        // Clear cache
        Cache::forget('social_login_settings');

        return response()->json([
            'success' => true,
            'is_enabled' => $setting->is_enabled,
            'message' => $setting->is_enabled 
                ? ucfirst($provider) . ' has been enabled' 
                : ucfirst($provider) . ' has been disabled'
        ]);
    }

    /**
     * Test a provider's configuration
     */
    public function testProvider(Request $request, $provider)
    {
        $setting = SocialLoginSetting::where('provider', $provider)->first();
        
        if (!$setting) {
            return response()->json(['error' => 'Provider not found'], 404);
        }

        if (!$setting->isConfigured()) {
            return response()->json(['error' => 'Provider is not configured'], 422);
        }

        // Basic validation - in a real app, you'd test the actual OAuth flow
        $errors = [];
        
        if (empty($setting->client_id)) {
            $errors[] = 'Client ID is required';
        }
        
        if (empty($setting->client_secret)) {
            $errors[] = 'Client Secret is required';
        }
        
        if (empty($setting->redirect_url)) {
            $errors[] = 'Redirect URL is required';
        }

        if (!empty($errors)) {
            return response()->json([
                'success' => false,
                'errors' => $errors
            ], 422);
        }

        return response()->json([
            'success' => true,
            'message' => ucfirst($provider) . ' configuration is valid!'
        ]);
    }

    /**
     * Get default social login providers
     */
    private function getDefaultProviders()
    {
        $providers = [
            'google' => [
                'provider' => 'google',
                'client_id' => '',
                'client_secret' => '',
                'redirect_url' => config('app.url') . '/auth/google/callback',
                'is_enabled' => false,
            ],
            'facebook' => [
                'provider' => 'facebook',
                'client_id' => '',
                'client_secret' => '',
                'redirect_url' => config('app.url') . '/auth/facebook/callback',
                'is_enabled' => false,
            ],
            'twitter' => [
                'provider' => 'twitter',
                'client_id' => '',
                'client_secret' => '',
                'redirect_url' => config('app.url') . '/auth/twitter/callback',
                'is_enabled' => false,
            ],
            'github' => [
                'provider' => 'github',
                'client_id' => '',
                'client_secret' => '',
                'redirect_url' => config('app.url') . '/auth/github/callback',
                'is_enabled' => false,
            ],
            'linkedin' => [
                'provider' => 'linkedin',
                'client_id' => '',
                'client_secret' => '',
                'redirect_url' => config('app.url') . '/auth/linkedin/callback',
                'is_enabled' => false,
            ],
        ];

        $settings = collect();
        foreach ($providers as $provider) {
            $settings->push(new SocialLoginSetting($provider));
        }

        return $settings;
    }
}
