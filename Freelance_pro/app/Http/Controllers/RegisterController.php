<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:client,developer,admin',
        ]);


        // User creation logic
        $role = $request->role;
        if (in_array($role, ['developer', 'admin'])) {
            $role = 'client';
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $role,
            'requested_role' => $request->role,
            'approved' => false,
        ]);

        // Log user creation

        // Redirect with success message
        return redirect('/login')->with('success', 'Compte créé avec succès ! Connectez-vous maintenant.');

        
    }
}
