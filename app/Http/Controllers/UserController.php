<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        return view('home');
    }

    public function viewhotel(){
        return view('home');
    }


    public function showProfileForm()
    {
        return view('user.profile');
    }

    public function updateProfile(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        // Get the authenticated user
        $user = User::find(auth()->id());

        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        // Update user information
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}




//ORM eloquent
//database untuk book
//create controller bookcontroller
//mvc untuk connect database
