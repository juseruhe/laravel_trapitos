@extends('layouts.admin.app')

@section('content')

@foreach($tipo_documentos as $tipo_documento)
<form action="{{route('tipo_documento.update',$tipo_documento->id)}}" method="post">

@csrf

@method('PUT')

<input type="hidden" name="id" value="{{$tipo_documento->id}}">


<label for="Nombre_Tipo_Documento"> Nombre de Tipo de Documento</label>

<input type="text" name="Nombre_Tipo_Documento" value="{{$tipo_documento->Nombre_Tipo_Documento}}" >

<label for="Siglas"> Siglas</label>

<input type="text" name="Siglas" value="{{$tipo_documento->Siglas}}" >

<input type="submit" value="Actualizar Tipo de Documento">


</form>
@endforeach
@endsection