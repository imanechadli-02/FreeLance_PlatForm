<?php

namespace App\Http\Controllers;
use App\Models\User; // N'oublie pas d'importer le modèle User

use Illuminate\Http\Request;

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


}
