@extends('layouts.admin.app')
@section('content')
    <h1> Usuarios </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12 " id="div1" >

                <a href="{{route('usuario.create')}}" class="btn btn-primary my-4">Crear usuario <i class="fas fa-plus-square"></i> </a>
                <table   class="table table-dark ">

                <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">T.Documento</th>
                <th scope="col">Número</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Género</th>
                <th scope="col">F.Nacimiento</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Rol</th>
                <th scope="col">Opciones</th>
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
                      <td>{{$usuario->email}}</td>
                      <td>{{$usuario->password}}</td>
                      <td>{{$usuario->direccion}}</td>
                      <td>{{$usuario->telefono}}</td>
                      <td>{{$usuario->rol->Nombre_Rol}}</td>


                      <td>
                          <a href="{{route('usuario.show',$usuario->id)}}" class="btn btn-sm btn-info"> Detalles</a>
                         <a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-sm btn-warning"> Editar </a>
                          </form>

                      </td>
                      <td>
                          <form action="{{route('usuario.destroy',$usuario->id)}}"method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger"> Eliminar</button>
                              <a href="{{route('usuario.editrol',$usuario->id)}}" class="btn btn-sm btn-success">Rol </a>
                          </form>

                      </td>
                  </tr>
                  @endforeach
                </table>
            </div>
@endsection

