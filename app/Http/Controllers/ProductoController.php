<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Producto;
use Illuminate\Http\Request;

use App\Models\Talla;


class ProductoController extends Controller
{
  /*  function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }*/

    public function index()
    {
        $productos=Producto::all();

      


        return view('producto.index',compact('productos'));
       
    }
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
