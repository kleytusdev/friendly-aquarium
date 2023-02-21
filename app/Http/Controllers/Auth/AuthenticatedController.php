<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


class AuthenticatedController extends AuthenticatedSessionController
{
    public function logout(Request $request)
    {

        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
