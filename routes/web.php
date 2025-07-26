<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileSettingsController; 
use App\Http\Controllers\PostController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    Route::get('/settings', [ProfileSettingsController::class, 'edit'])->name('settings.edit');
    Route::put('/profile-settings', [ProfileSettingsController::class, 'updateGeneral'])->name('profile.update');
    Route::put('/profile-settings/profile-image', [ProfileSettingsController::class, 'updateProfileImage'])->name('profile.updateImage');
    Route::put('/profile-settings/notifications', [ProfileSettingsController::class, 'updateNotifications'])->name('profile.updateNotifications');
    Route::put('/profile-settings/password', [ProfileSettingsController::class, 'updatePassword'])->name('profile.updatePassword');
    Route::delete('/profile-settings/delete-account', [ProfileSettingsController::class, 'deleteAccount'])->name('profile.deleteAccount');

    Route::post('/home/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/home/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/home/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::put('/home/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/home/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});
