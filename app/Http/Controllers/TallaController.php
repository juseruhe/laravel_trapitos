<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Talla;


class TallaController extends Controller
{
    public function index()
    {
        $talla=Talla::all();
        return view('talla.index',compact('talla'));
    }
    public function create(){
        return view('talla.create');
    }
    public function store(Request $request){
        $talla=Talla::create($request->all());
        return redirect()->route('talla.index');
    }
    public function show($id){
        $talla=Talla::find($id);
        return view('rol.show',compact('talla'));
    }
    public function edit($id){
        $talla=Talla::find($id);
        return view('rol.edit',compact('talla'));
    }

    public function update(Request  $request, $id){
        $talla=Talla::find($id)->update($request->all());
        return redirect()->route('talla.index');

    }
    public function destroy($id){
        $talla=Talla::find($id)->delete();
        return redirect()->route('rol.index');
    }
}
