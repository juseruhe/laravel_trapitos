@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('producto.create') }}">Crear Nuevo Producto <i class="fas fa-plus-square"></i></a>
              <table class="table table-striped mt -30 mb 4 ">
                <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre del Producto</th>
                <th scope="col">Imagen</th>
                <th scope="col">Talla</th>
                <th scope="col">Color</th>
                <th scope="col">Material</th>
                <th scope="col">Categoria</th>
                <th scope="col">Clasificacion</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Actualizacion</th>
                <th scope="col">Opciones</th>
                </tr>
                </thead>
                  <tbody>
                  @foreach($productos as $productos)
                  <tr>
                      <td>{{$productos->id}}</td>
                      <td>{{$productos->nombre_producto}}</td>
                      <td><img src="{{asset('storage').'/'. $productos->imagen}}" alt="{{$productos->nombre_producto}}" width="200px" height="100px"></td>
                      <td>{{$productos->Talla->talla}}</td>
                      <td>{{$productos->Color->color}}</td>
                      <td>{{$productos->Material->material}}</td>
                      <td>{{$productos->Categoria->Nombre}}</td>
                      <td>{{$productos->Clasificacion->Nombre}}</td>
                      <td>{{$productos->valor}}</td>
                      <td>{{$productos->cantidad}}</td>
                      <td>{{$productos->updated_at}}</td>
                      <td>
                          <form action="{{route('producto.destroy',$productos->id)}}"method="post">
                              @csrf
                              @method('DELETE')
                          <a href="{{ route('producto.show',$productos->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Detalles</a>
                         <a href="{{ route('producto.edit',$productos->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Editar </a>
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i> Eliminar</button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
               </table>
        </div>
    </div>
</div>
@endsection
