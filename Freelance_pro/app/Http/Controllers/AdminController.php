<?php

namespace App\Http\Controllers;
use App\Models\User; // N'oublie pas d'importer le modèle User

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function index(Request $request)
    {
        $query = User::query();

        // Apply filters
        if ($request->has('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->has('role') && $request->role != '') {
            $query->where('role', $request->role);
        }

        if ($request->has('status') && $request->status != '') {
            if ($request->status == 'approved') {
                $query->where('approved', true);
            } elseif ($request->status == 'pending') {
                $query->where('approved', false);
            }
        }

        // Apply sorting
        if ($request->has('sort')) {
            $query->orderBy($request->sort, $request->direction ?? 'asc');
        }

        $users = $query->paginate(10);
        return view('admin.users', compact('users'));
    }

    public function approve(User $user)
    {
        $user->update([
            'role' => $user->requested_role,
            'approved' => true,
            'requested_role' => null
        ]);

        return back()->with('success', 'User approved successfully');
    }

    public function delete(User $user)
    {
        $user->delete();
        return back()->with('success', 'User deleted successfully');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'profil_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('profil_picture')) {
            // Delete old profile picture if it exists
            if ($user->profil_picture) {
                $oldPath = str_replace('storage/', '', $user->profil_picture);
                if (file_exists(public_path('storage/' . $oldPath))) {
                    unlink(public_path('storage/' . $oldPath));
                }
            }

            // Store new profile picture in public/storage/profile-pictures
            $file = $request->file('profil_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/profile-pictures'), $filename);
            $validated['profil_picture'] = 'storage/profile-pictures/' . $filename;
        }

        $user->update($validated);

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.profile')->with('success', 'Password updated successfully');
    }
}
