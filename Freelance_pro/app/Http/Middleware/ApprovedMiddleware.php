<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ApprovedMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->approved) {
            Auth::logout();
            return redirect('/login')->withErrors(['approved' => 'Votre compte n\'est pas approuvé.']);
        }

        return $next($request);
    }
}

