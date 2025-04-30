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
            return $this->authenticated($request, Auth::user());
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification ne correspondent pas.',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'developer') {
            return redirect()->route('developer.dashboard');
        } else {
            return redirect()->route('client.dashboard');
        }
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

        if ($request->hasFile('profil_picture')) {
            if ($user->profil_picture) {
                // Delete old file from public/storage/profile-pictures
                $oldPath = public_path('storage/profile-pictures/' . basename($user->profil_picture));
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // Store new file in public/storage/profile-pictures
            $file = $request->file('profil_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/profile-pictures'), $filename);
            $validated['profil_picture'] = 'profile-pictures/' . $filename;
        }

        $user->update($validated);

        return redirect()->route('profile')->with('success', 'Profil mis à jour avec succès !');
    }
}
