<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Factory;
use Illuminate\View\View;

class AuthController
{
    /**
     * check current user access to admin panel
     * @param Request $request
     * @return RedirectResponse|Factory|View
     */
    public function login(Request $request): RedirectResponse|Factory|View
    {
        if (Auth::check())
        {
            $user = Auth::user();
            $access = $user->admin;
            if ($access)
            {
                return view('admin');
            }
            else
            {
                abort(404);
            }
        }
        else
        {
            return view('auth.login');
        }
    }
}
