<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\FileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

// Protected routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/form', function () {
        return view('form');
    })->name('form');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // User profile management (for all authenticated users)
    Route::get('/my-profile', [UserProfileController::class, 'profile'])->name('profile');
    Route::get('/my-profile/edit', [UserProfileController::class, 'editProfile'])->name('profile.edit-profile');
    Route::put('/my-profile', [UserProfileController::class, 'updateProfile'])->name('profile.update-profile');
    Route::delete('/my-account', [UserProfileController::class, 'deleteAccount'])->name('profile.delete-account');

    // File management routes
    Route::resource('files', FileController::class);
    Route::get('/files/{file}/download', [FileController::class, 'download'])->name('files.download');

});

// Admin-only routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('users', UserController::class);
    
    // Settings routes
    Route::get('/admin/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('admin.settings.index');
    Route::put('/admin/settings', [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('admin.settings.update');
    Route::post('/admin/settings/{provider}/toggle', [App\Http\Controllers\Admin\SettingsController::class, 'toggleStatus'])->name('admin.settings.toggle');
    Route::post('/admin/settings/{provider}/test', [App\Http\Controllers\Admin\SettingsController::class, 'testProvider'])->name('admin.settings.test');
});

require __DIR__.'/auth.php';
