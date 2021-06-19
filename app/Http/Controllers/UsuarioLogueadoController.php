<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

use App\Models\Tipo_Documento;

use App\Models\Genero;

use App\Models\Producto;

class UsuarioLogueadoController extends Controller
{
    public function index(Request $request){

        $usuario3 = Usuario::select('id')->where('email',$request->email)->first();

        return redirect()->route('index.index',$usuario3->id)->with('correo',$request->email)
        ->with('id',$usuario3->id);
    }

    public function store(Request $request){
        
        $usuario3 = Usuario::select('id')->where('email',$request->email)->first();

        return redirect()->route('usuariologueado.edit',$usuario3->id)->with('correo',$request->email)
        ->with('id',$usuario3->id);

    }

    public function edit($id){

        $usuarios=Usuario::find($id)
        ->where('id', '=', $id)
        ->get();

        $tipo_documentos= Tipo_Documento::all();

        $generos= Genero::all();

        return view('usuariologueado.edit',compact('usuarios','tipo_documentos'))->with(compact('generos'));

    }

    public function update(Request $request,$id){

        Usuario::find($id)->update($request->all());

        $usuario3 = Usuario::select('id')->where('email',$request->email)->first();

        return redirect()->route('index.index')->with('correo',$request->email)
        ->with('id',$usuario3->id)->with('mensaje','Actualizado Correctamente');
    }


    public function productos(Request $request){

      $usuario3 = Usuario::select('id')->where('email',$request->email)->first();

        $productos = Producto::all();

        return redirect()->route('productodos.index')->with('correo',$request->email)
        ->with('id',$usuario3->id);

    }

    
    public function producto(Request $request,$id){

        $usuario3 = Usuario::select('id')->where('email',$request->email)->first();
  
  
          return redirect()->route('productodos.show',$id)->with('correo',$request->email)
          ->with('id',$usuario3->id);
  
      }

      public function carrito(Request $request,$id){

        $usuario3 = Usuario::select('id')->where('email',$request->email)->first();

        return redirect()->route('carrito.show',$id)->with('correo',$request->email)
        ->with('id',$usuario3->id);
  
      }


}
