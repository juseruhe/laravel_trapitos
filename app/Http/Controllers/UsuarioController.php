<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
        public function index()
    {
        $usuarios=Usuario::all();
        return view('usuario.index',compact('usuarios'));
    }
    public function create(){
        return view('usuario.create');
    }
    public function store(Request $request){
        $usuario=Usuario::create($request->all());
        return redirect()->route('usuario.index');
    }
    public function show($id){
        $usuario=Usuario::find($id);
        return view('rol.show',compact('usuario'));
    }
    public function edit($id){
        $usuario=Usuario::find($id);
        return view('rol.edit',compact('usuario'));
    }

    public function update(Request  $request, $id){
        $usuario=Usuario::find($id)->update($request->all());
        return redirect()->route('usuario.index');

    }
    public function destroy($id){
        $usuario=Usuario::find($id)->delete();
        return redirect()->route('usuario.index');
    }

}
