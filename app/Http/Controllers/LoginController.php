<?php

namespace App\Http\Controllers;

use App\Models\Producto;
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

        $usuarios2 = Usuario::select('email','password')
        ->from('usuarios')
        ->where('email','=',$request->email)
        ->where('password','=',$request->password)
        ->get();


        if(count($usuarios2) > 0){

            $usuarios2 = Usuario::select('email','password','rol_id')
        ->from('usuarios')
        ->where('email','=',$request->email)
        ->where('password','=',$request->password)
        ->where('rol_id','=',1)
        ->get();

        
       if(count($usuarios2) > 0){

         $usuarios = Usuario::all();

        return view('usuario.index',compact('usuarios'));
       }

       else {

       

          return view('indexadmin');
       }



        }
    
        else {
            return view('login.login');
        }





       /* $credentials = $request->only('email', 'password');
       if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('usuario.index');
        }
            return back()->withErrors([
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
