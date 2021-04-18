@extends('layouts.admin.app');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
           <form action="{{route('usuario.store')}}" method="POST">
               @csrf

               <div class="form-group mt-4">
                   <label for="name">Tipo de Documento</label>
                   <select name="tipo_documento_id">
                  @foreach($tipo_documentos as $tipo_documento)
                   <option value="{{$tipo_documento->id}}">{{$tipo_documento->Nombre_Tipo_Documento}}</option>
                   @endforeach
                   </select>
                 </div>

                 <div class="form-group mt-4">
                   <label for="name">Tipo de Documento</label>
                 <input type="text" name="numero_documento">
                 </div>


                 <div class="form-group mt-4">
                   <label for="name">Nombres</label>
                 <input type="text" name="nombres">
                 </div>


                 <div class="form-group mt-4">
                   <label for="name">Apellidos</label>
                 <input type="text" name="apellidos">
                 </div>


                 <div class="form-group mt-4">
                   <label for="name">Género</label>
                   <select name="genero_id">
                  @foreach($generos as $genero)
                   <option value="{{$genero->id}}">{{$genero->Nombre_Genero}}</option>
                   @endforeach
                   </select>
                 </div>

                 <div class="form-group mt-4">
                   <label for="name">Fecha de Nacimiento</label>
                 <input type="date" name="fecha_nacimiento">
                 </div>


                 <div class="form-group mt-4">
                   <label for="name">Correo</label>
                 <input type="text" name="correo">
                 </div>

                 <div class="form-group mt-4">
                   <label for="name">Contraseña</label>
                 <input type="password" name="contrasena">
                 </div>

                 <div class="form-group mt-4">
                   <label for="name">Dirección</label>
                 <input type="text" name="direccion">
                 </div>

                 <div class="form-group mt-4">
                   <label for="name">Teléfono</label>
                 <input type="text" name="telefono">
                 </div>

                 <div class="form-group mt-4">
                   <label for="name">Rol</label>
                   <select  name="rol_id">
                  @foreach($roles as $rol)
                   <option  value="{{$rol->id}}">{{$rol->Nombre_Rol}}</option>
                   @endforeach
                   </select>
                 </div>

                   <button type="submit" class="btn btn-primary">Crear Nuevo Usuario</button>
               
          
        </div>
    </div>
</div>
@endsection
