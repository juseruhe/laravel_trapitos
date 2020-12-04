@extends('layouts.admin.app');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('rol.create') }}">Crear Nuevo Rol</a>
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
                  @foreach($roles as $roles)
                  <tr>
                      <td>{{$roles->id}}</td>
                      <td>{{$roles->Nombre_Rol}}</td>
                      <td>{{$roles->created_at}}</td>
                      <td>
                          <form action="{{ route('rol.destroy',$roles->id)}}"method="post">
                              @csrf
                              @method('DELETE')
                          <a href="{{ route('rol.show',$roles->id)}}" class="btn btn-sm btn-info">Detalles</a>
                          <a href="{{ route('rol.edit',$roles->id)}}" class="btn btn-sm btn-warning">Editar</a>
                          <button type="submit" class="btn btn-sm btn-danger">Eliminar</buttonty>
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
