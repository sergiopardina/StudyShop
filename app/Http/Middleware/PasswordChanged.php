<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;



class PasswordChanged
{
    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {
            $user = Auth::user();
            if (!$user->must_change_password)
            {
                return $next($request);
            } else
            {
                return redirect()->route('change.password');
            }
        }
    }
}
