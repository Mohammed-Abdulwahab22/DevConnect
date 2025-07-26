<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProfileSettingsController extends Controller
{
    public function edit()
    {
        return view('settings'); // Make sure this matches your view file name
    }

    public function updateGeneral(Request $request)
    {
        $user = auth()->user();

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'occupation' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'about_me' => ['nullable', 'string', 'max:500'],
            'skills' => ['nullable', 'string'], // Will be converted to array
        ]);

        // Convert comma-separated skills string to an array
        $validatedData['skills'] = $validatedData['skills'] ? array_map('trim', explode(',', $validatedData['skills'])) : null;

        $user->update($validatedData);

        return back()->with('success', 'Profile updated successfully!');
    }

    public function updateProfileImage(Request $request)
    {
        $request->validate([
            'profile_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $user = auth()->user();

        // Delete old image if exists
        if ($user->profile_image) {
            Storage::delete($user->profile_image);
        }

        $path = $request->file('profile_image')->store('profile_images', 'public');
        $user->profile_image = $path;
        $user->save();

        return back()->with('success', 'Profile image updated successfully!');
    }


    public function updateNotifications(Request $request)
    {
        $user = auth()->user();

        $validatedData = $request->validate([
            'email_notifications' => ['nullable', 'boolean'],
            'push_notifications' => ['nullable', 'boolean'],
            'new_post_alerts' => ['nullable', 'boolean'],
        ]);

        // Cast checkboxes to boolean if they are present, otherwise default to false
        $user->email_notifications = $request->has('email_notifications');
        $user->push_notifications = $request->has('push_notifications');
        $user->new_post_alerts = $request->has('new_post_alerts');

        $user->save();

        return back()->with('success', 'Notification preferences updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = auth()->user();
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password updated successfully!');
    }

    public function deleteAccount(Request $request)
    {
        $user = auth()->user();

        // Log out the user before deleting to prevent issues
        auth()->logout();

        // Delete user's profile image if it exists
        if ($user->profile_image) {
            Storage::delete($user->profile_image);
        }

        $user->delete();

        return redirect('/')->with('success', 'Your account has been deleted successfully.');
    }
}