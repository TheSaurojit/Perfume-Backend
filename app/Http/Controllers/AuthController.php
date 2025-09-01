<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function loginView()
    {
        //    User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }

        $request->session()->regenerate();

        return to_route('home')->with('success', 'Logged in successfully.');
    }


    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }

    public function changePasswordView()
    {
        // function body
        return view('auth.change-password');
    }

    public function changePassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        /** @var User */
        $user = Auth::user();

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {

            return back()->withErrors(['error' => 'Entered wrong current password ']);
        }

        // Update the password
        $user->forceFill([
            'password' => Hash::make($request->new_password),
        ])->save();

        return redirect()->back()->with('success', 'Password changed successfully');
    }
}
