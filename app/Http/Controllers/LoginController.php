<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Usuario;


class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');


        
       if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('usuario.index');
        }

      

            

            return redirect()->route('login.login');
        

       /* return back()->withErrors([
            'email' => 'El correo no esta Inscrito',
        ]);*/

    }
  /*  public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }*/

  /*  public function __construct(){
        $this ->middleware('auth');
    }*/
}
