@extends('layouts.admin.app');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
           <form action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="form-group mt-4">
                   <label for="name">Nombre del Nuevo Producto</label>
                   <input name="nombre_producto" id="name" type="text" class="form-control">

                   <label for="name">Imagén del Producto</label>
                   <input name="imagen"  type="file" class="form-control">

                   <label for="name">Talla</label>
                  <select name="talla_id" id="" class="form-control">
                  @foreach($tallas as $talla)
                  <option value="{{$talla->id}}">{{$talla->talla}}</option>
                  @endforeach
                  </select>

                  <label for="name">Color</label>
                  <select name="color_id" id="" class="form-control">
                  @foreach($colores as $color)
                  <option value="{{$color->id}}">{{$color->color}}</option>
                  @endforeach
                  </select>

                  <label for="name">Materiales</label>
                  <select name="material_id" id="" class="form-control">
                  @foreach($materiales as $material)
                  <option value="{{$material->id}}">{{$material->material}}</option>
                  @endforeach
                  </select>


                  <label for="name">Categoria</label>
                  <select name="categoria_id" id="" class="form-control">
                  @foreach($categorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->Nombre}}</option>
                  @endforeach
                  </select>

                  <label for="name">Clasificación</label>
                  <select name="clasificacion_id" id="" class="form-control">
                  @foreach($clasificaciones as $clasificacion)
                  <option value="{{$clasificacion->id}}">{{$clasificacion->Nombre}}</option>
                  @endforeach
                  </select>

                  <label for="name">Precio</label>
                   <input name="valor" id="name" type="number" class="form-control">

                   <label for="name">Cantidad</label>
                   <input name="cantidad" id="name" type="text" class="form-control">


                   <button type="submit" class="btn btn-primary">Guardar Nuevo Producto</button>
                   <a class="btn btn-sm btn-danger" href="{{route('producto.index')}}">Cancelar</a>
               </div>

           </form>
        </div>
    </div>
</div>
@endsection
