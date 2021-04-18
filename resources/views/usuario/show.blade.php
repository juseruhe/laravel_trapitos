@extends('layouts.admin.app')

@section('content')

<table class="btn btn-dark">
<tr>
<td>ID</td>
<td>Tipo de Documento</td>
<td>Número de Documento</td>
<td>Nombres</td>
<td>Apellidos</td>
<td>Género</td>
<td>Fecha de Nacimiento</td>
<td>Correo</td>
<td>Contraseña</td>
<td>Dirección</td>
<td>Teléfono</td>
<td>Rol</td>
</tr>

@foreach($usuarios as $usuario)
<tr>
    
<td>{{$usuario->id}}</td>
<td>{{$usuario->tipo_documento->Nombre_Tipo_Documento}}</td>
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


</tr>
@endforeach

</table>

<a href="{{route('usuario.index')}}">Volver</a>


@endsection

