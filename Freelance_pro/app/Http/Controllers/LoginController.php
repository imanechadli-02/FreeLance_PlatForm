<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class LoginController extends Controller
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
    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/client/dashboard'); // redirect to client dashboard
        }

        return back()->withErrors([
            'email' => 'Les informations d identification ne correspondent pas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Déconnexion réussie.');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'company_website' => 'nullable|url|max:255',
            'company_description' => 'nullable|string',
            'profil_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profil_picture')) {
            // Delete old profile picture if exists
            if ($user->profil_picture) {
                Storage::delete('public/' . $user->profil_picture);
            }
            
            // Store new profile picture
            $path = $request->file('profil_picture')->store('profile-pictures', 'public');
            $validated['profil_picture'] = $path;
        }

        $user->update($validated);

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

}
 