<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function store(Request $request){
        $producto=Producto::create($request->all());
        return redirect()->route('producto.index');
    }
    public function show($id){
        $producto=Producto::find($id);
        return view('producto.show',compact('producto'));
    }
    public function edit($id){
        $producto=Producto::find($id);
        return view('producto.edit',compact('producto'));
    }

    public function update(Request  $request, $id){
        $producto=Producto::find($id)->update($request->all());
        return redirect()->route('producto.index');

    }
    public function destroy($id){
        $producto=Producto::find($id)->delete();
        return redirect()->route('producto.index');
    }
}
