@extends('layouts.admin.app');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-3 mb-4" href="">Crear Nuevo Usuario <i class="fas fa-plus-square"></i></a>

              <table class="table table-striped mt-30 mb-4 ">

            <div class="table-responsive">
              <table class="table table-striped mt -30 mb 4 ">

                <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo Documento</th>
                <th scope="col">Número</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Género</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>

                </tr>
                </thead>
                  <tbody>
                  @foreach($usuarios as $usuario)
                  <tr>
                      <td>{{$usuario->id}}</td>
                      <td>{{$usuario->tipo_documento->Siglas}}</td>
                      <td>{{$usuario->numero_documento}}</td>
                      <td>{{$usuario->nombres}}</td>
                      <td>{{$usuario->apellidos}}</td>
                      <td>{{$usuario->genero->Nombre_Genero}}</td>
                      <td>{{$usuario->fecha_nacimiento}}</td>
                      <td>{{$usuario->correo}}</td>
                      <td>{{$usuario->contrasena}}</td>
                      <td>{{$usuario->direccion}}</td>
                      <td>{{$usuario->telefono}}</td>
                      <td>{{$usuario->rol->Nombre_Rol}}</td>


                      <td>
                          <form action="{{route('usuario.destroy',$usuario->id)}}"method="post">
                              @csrf
                              @method('DELETE')
                          <a href="{{route('usuario.show',$usuario->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Detalles</a>
                         <a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Editar </a>
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i> Eliminar</button>
                          <a href="{{route('usuario.editrol',$usuario->id)}}" class="btn btn-sm btn-success"><i class="fas fa-id-badge"></i> Cambiar Rol </a>
                          </form>
                        
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
