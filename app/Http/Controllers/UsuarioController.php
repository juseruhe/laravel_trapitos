<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Tipo_Documento;
use App\Models\Genero;
use App\Models\rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{


    public function __construct(){
        $this ->middleware('auth');
    }
        public function index()
    {
        $usuarios=Usuario::all();

        $tipo_documentos = Tipo_Documento::all();

        $generos = Genero::all();

        $roles = Rol::all();

        return view('usuario.index',compact('usuarios','tipo_documentos'))->with(compact('generos','roles'));
    }
    public function create(){

        $tipo_documentos = Tipo_Documento::all();

        $generos = Genero::all();

        $roles = rol::where('id', '=', '1')->get();

        return view('usuario.create',compact('tipo_documentos','generos'))->with(compact('roles'));
    }
    public function store(Request $request){

        $usuario=Usuario::create($request->all());
        return redirect()->route('usuario.index');
    }



    public function show($id){
        $usuarios=Usuario::find($id)
        ->where('id', '=', $id)
        ->get();
        return view('usuario.show',compact('usuarios'));
    }


    public function edit($id){

        $usuarios=Usuario::find($id)
        ->where('id', '=', $id)
        ->get();

        $tipo_documentos= Tipo_Documento::all();

        $generos= Genero::all();

        return view('usuario.edit',compact('usuarios','tipo_documentos'))->with(compact('generos'));
    }

    public function update(Request  $request, $id){
        $usuario=Usuario::find($id)->update($request->all());
        return redirect()->route('usuario.index');

    }
    public function destroy($id){
        $usuario=Usuario::find($id)->delete();
        return redirect()->route('usuario.index');
    }

    public function editrol($id){

        $usuarios=Usuario::find($id)
        ->where('id', '=', $id)
        ->get();

        $roles= rol::all();


        return view('usuario.editrol',compact('usuarios','roles'));

    }

}
