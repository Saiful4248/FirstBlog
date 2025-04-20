<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $posts = $user->posts;
        $publishedPosts = $posts->where('status', 'published');
        $draftPosts = $posts->where('status', 'draft');

        return view('profile.show', compact('user', 'posts', 'publishedPosts', 'draftPosts'));
    }

    public function updateProfilePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $imagePath;
            $user->save();
        }

        return redirect()->route('profile.show')->with('success', 'Profile picture updated successfully.');
    }

    public function deleteProfilePicture()
    {
        $user = Auth::user();
        $user->profile_picture = null;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile picture deleted successfully.');
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
         $user->update($request->only(['name', 'bio']));
       

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}

