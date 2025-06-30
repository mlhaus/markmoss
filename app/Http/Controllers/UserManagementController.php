<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserManagementController extends Controller
{
    /**
     * Show the form to set a user's password.
     */
    public function showForm()
    {
        return view('set-password');
    }

    /**
     * Handle the password update.
     */
    public function updatePassword(Request $request)
    {
        // 1. Validate the input
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        // 2. Find the user
        $user = User::where('email', $request->email)->first();

        // 3. Update their password with a new hash
        $user->forceFill([
            'password' => Hash::make($request->password),
        ])->save();

        // 4. Redirect back with a success message
        return back()->with('success', 'Password for ' . $user->email . ' has been updated successfully!');
    }
}
