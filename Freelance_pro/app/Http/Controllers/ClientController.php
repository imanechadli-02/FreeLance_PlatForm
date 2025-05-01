<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $projects = Project::where('client_id', $user->id)
            ->with(['developer', 'service'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('client.dashboard', compact('projects'));
    }
} 