@extends('layouts.admin.app')

@section('content')

<h1> Tipos de Documentos</h1>

<a href="{{route('tipo_documento.create')}}">Crear Tipo de Documento</a>

<table class="table table-info">

<tr>
<td>ID</td>
<td>Nombre del Tipo de Documento</td>
<td>Siglas</td>
<td>Acciones</td>
</tr>

<tr>
@foreach($tipo_documentos as $tipo_documento)
<td>{{$tipo_documento->id}} <td>
<td>{{$tipo_documento->Nombre_Tipo_Documento}}</td>
<td>{{$tipo_documento->Siglas}}</td>
<td>
    <form action="{{route('tipo_documento.destroy',$tipo_documento->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('tipo_documento.edit',$tipo_documento->id)}}"> Editar</a>
<a href="{{route('tipo_documento.show',$tipo_documento->id)}}">Detalles</a>
<button onclick="confirm('¿Desea Eliminar el tipo de Documento?')"> Eliminar</button>
</form>
</td>
</tr>



@endforeach

</table>









@endsection