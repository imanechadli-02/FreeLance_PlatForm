<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterLoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle user login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/client/dashboard'); // Redirect after login
        }

        return back()->withErrors([
            'email' => 'Les informations d’identification ne correspondent pas.',
        ]);
    }

    // Handle user registration
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:client,developer,admin',
        ]);

        // Force the role to 'client' even if they choose developer or admin
        $role = $validated['role'];
        if (in_array($role, ['developer', 'admin'])) {
            $role = 'client';
        }

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $role,
            'requested_role' => $validated['role'],
            'approved' => false,
        ]);

        // Redirect to login after registration
        return redirect('/login')->with('success', 'Compte créé avec succès ! Connectez-vous maintenant.');
    }
}
