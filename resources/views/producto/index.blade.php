@extends('layouts.admin.app');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('producto.create') }}">Crear Nuevo Producto <i class="fas fa-plus-square"></i></a>
              <table class="table table-striped mt -30 mb 4 ">
                <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre del Rol</th>
                <th scope="col">Fecha de Creación</th>
                <th scope="col">Opciones</th>
                </tr>
                </thead>
                  <tbody>
                  @foreach($productos as $productos)
                  <tr>
                      <td>{{$productos->id}}</td>
                      <td>{{$productos->Nombre_Rol}}</td>
                      <td>{{$productos->created_at}}</td>
                      <td>
                          <form action="{{ route('producto.destroy',$productos->id)}}"method="post">
                              @csrf
                              @method('DELETE')
                          <a href="{{ route('producto.show',$roles->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Detalles</a>
                         <a href="{{ route('producto.edit',$roles->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Editar </a>
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
