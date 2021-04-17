<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function login(){
        return view('usuario.login');
    }
    /*
    public function index()
    {
        $roles=rol::all();
        return view('rol.index',compact('roles'));
    }
    public function create(){
        return view('rol.create');
    }
    public function store(Request $request){
        $rol=rol::create($request->all());
        return redirect()->route('rol.index');
    }
    public function show($id){
        $rol=rol::find($id);
        return view('rol.show',compact('rol'));
    }
    public function edit($id){
        $rol=rol::find($id);
        return view('rol.edit',compact('rol'));
    }

    public function update(Request  $request, $id){
        $rol=rol::find($id)->update($request->all());
        return redirect()->route('rol.index');

    }
    public function destroy($id){
        $rol=rol::find($id)->delete();
        return redirect()->route('rol.index');
    }
    */
}
