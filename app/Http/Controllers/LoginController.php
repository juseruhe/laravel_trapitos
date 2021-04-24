<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('correo', 'contrasena');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('login.login');
        }

        return back()->withErrors([
            'email' => 'El correo no esta Inscrito',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
