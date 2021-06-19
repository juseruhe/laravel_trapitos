<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

use App\Models\Producto;

use App\Models\Carrito;

class CarritoController extends Controller

{

 


    public function store(Request $request){
       
    
    

        Carrito::insert(["usuario_id" => $request->usuario_id,
        "producto_id" => $request->producto_id,
        "cantidades" => $request->cantidades
    ]);

    $usuario3 = Usuario::select('id','email')->where('id',$request->usuario_id)->first();
  
  
    return redirect()->route('productodos.index')->with('correo',$usuario3->email)
    ->with('id',$usuario3->id)->with('mensaje','Producto insertado en el carrito');
        


    }


    public function show($id){

       $carrito =  Carrito::where('usuario_id',$id)->first();

        return view('carrito.show',compact('carrito'));
    }
    
}
