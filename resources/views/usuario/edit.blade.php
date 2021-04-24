@extends('layouts.admin.app');
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
        @foreach($usuarios as $usuario)
            <form action="{{route('usuario.update',$usuario->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mt-4">
                    <label for="name">Tipo de Documento</label>
                   <select disabled name="tipo_documento_id" >
                   <option value="{{$usuario->tipo_documento->id}}">{{$usuario->tipo_documento->Nombre_Tipo_Documento}}</option>
                   @foreach($tipo_documentos as $tipo_documento)
                   <option value="{{$tipo_documento->id}}">{{$tipo_documento->Nombre_Tipo_Documento}}</option>
                   @endforeach
                   </select>
                </div>



                <div class="form-group mt-4">
                    <label for="name">Número de Documento</label>
                    <input disabled name="numero_documento" id="name" type="text" class="form-control" value="{{$usuario->numero_documento}}">
                </div>

                <div class="form-group mt-4">
                    <label for="name">Nombres:</label>
                    <input  name="nombres" id="name" type="text" class="form-control" value="{{$usuario->nombres}}">
                </div>

                <div class="form-group mt-4">
                    <label for="name">Apellidos:</label>
                    <input  name="apellidos" id="name" type="text" class="form-control" value="{{$usuario->apellidos}}">
                </div>

                <div class="form-group mt-4">
                    <label for="name">Género</label>
                   <select  name="genero_id" >
                   <option value="{{$usuario->genero->id}}">{{$usuario->genero->Nombre_Genero}}</option>
                   @foreach($generos as $genero)
                   <option value="{{$genero->id}}">{{$genero->Nombre_Genero}}</option>
                   @endforeach
                   </select>
                </div>

                <div class="form-group mt-4">
                    <label for="name">Fecha de Nacimiento:</label>
                    <input  name="fecha_nacimiento" id="name" type="date" class="form-control" value="{{$usuario->fecha_nacimiento}}">
                </div>

                <div class="form-group mt-4">
                    <label for="name">Correo:</label>
                    <input  name="email" id="name" type="email" class="form-control" value="{{$usuario->correo}}">
                </div>


                <div class="form-group mt-4">
                    <label for="name">Contraseña:</label>
                    <input  name="password" id="name" type="password" class="form-control" value="{{$usuario->contrasena}}">
                </div>

                <div class="form-group mt-4">
                    <label for="name">Dirección:</label>
                    <input  name="direccion" id="name" type="text" class="form-control" value="{{$usuario->direccion}}">
                </div>

                <div class="form-group mt-4">
                    <label for="name">Teléfono:</label>
                    <input  name="telefono" id="name" type="text" class="form-control" value="{{$usuario->telefono}}">
                </div>



               <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                <a class="btn btn-sm btn-danger" href="{{ route('usuario.index')}}">Cancelar</a>
            </form>
    @endforeach
        </div>
    </div>
</div>
@endsection

