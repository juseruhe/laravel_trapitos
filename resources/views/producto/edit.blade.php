@extends('layouts.admin.app');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('producto.update',$producto->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-4">
                    <label for="name">Nombre del Producto</label>
                    <input name="nombre_producto" id="name" type="text" class="form-control" value="{{$producto->nombre_producto}}">
                
                    <label for="name">Imagen</label>
                    <img src="{{asset('storage').'/'. $producto->imagen}}"  alt="{{$producto->nombre_producto}}" width="200px" height="100px">
                   <input type="file" name="imagen" id="" class="form-control">

                   <label for="name">Talla</label>
                   <select name="talla_id" id="" class="form-control">
                   <option value="{{$producto->talla_id}}">{{$producto->Talla->talla}}</option>
                   @foreach($tallas as $talla)
                   <option value="{{$talla->id}}">{{$talla->talla}}</option>
                   @endforeach
                   </select>
                    
                   <label for="name">Color</label>
                   <select name="color_id" id="" class="form-control">
                   <option value="{{$producto->color_id}}">{{$producto->Color->color}}</option>
                   @foreach($colores as $color)
                   <option value="{{$color->id}}">{{$color->color}}</option>
                   @endforeach
                   </select> 

                   <label for="name">Material</label>
                   <select name="material_id" id="" class="form-control">
                   <option value="{{$producto->material_id}}">{{$producto->Material->material}}</option>
                   @foreach($materiales as $material)
                   <option value="{{$material->id}}">{{$material->material}}</option>
                   @endforeach
                   </select> 
                
                
                   <label for="name">Clasificación</label>
                   <select name="clasificacion_id" id="" class="form-control">
                   <option value="{{$producto->clasificacion_id}}">{{$producto->Clasificacion->Nombre}}</option>
                   @foreach($clasificaciones as $clasificacion)
                   <option value="{{$clasificacion->id}}">{{$clasificacion->Nombre}}</option>
                   @endforeach
                   </select> 

                   
                   <label for="name">Categoría</label>
                   <select name="categoria_id" id="" class="form-control">
                   <option value="{{$producto->categoria_id}}">{{$producto->Categoria->Nombre}}</option>
                   @foreach($categorias as $categoria)
                   <option value="{{$categoria->id}}">{{$categoria->Nombre}}</option>
                   @endforeach
                   </select> 

                   <label for="name">Precio</label>
                    <input name="valor" id="name" type="text" class="form-control" value="{{$producto->valor}}">

                    <label for="name">Cantidad</label>
                    <input name="cantidad" id="name" type="text" class="form-control" value="{{$producto->cantidad}}">
                
                </div>


               <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                <a class="btn btn-sm btn-danger" href="{{ route('producto.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection

