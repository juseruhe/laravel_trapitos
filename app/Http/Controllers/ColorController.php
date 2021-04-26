<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colores=Color::all();
        return view('color.index',compact('colores'));
    }
    public function create(){
        return view('color.create');
    }
    public function store(Request $request){
        $color=Color::create($request->all());
        return redirect()->route('color.index');
    }
    public function show($id){
        $color=Color::find($id);
        return view('color.show',compact('color'));
    }
    public function edit($id){
        $color=Color::find($id);
        return view('color.edit',compact('color'));
    }

    public function update(Request  $request, $id){
        $color=Color::find($id)->update($request->all());
        return redirect()->route('color.index');

    }
    public function destroy($id){
        $color=Color::find($id)->delete();
        return redirect()->route('color.index');
    }
}
