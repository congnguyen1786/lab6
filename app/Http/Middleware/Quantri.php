<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuanTri
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->idgroup == 1) {
            return $next($request);
        }

        return redirect('/'); 
    }
}
