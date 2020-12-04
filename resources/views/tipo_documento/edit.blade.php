@extends('layouts.admin.app')

@section('content')

@foreach($tipo_documentos as $tipo_documento)
<form class="table table-dark" action="{{route('tipo_documento.update',$tipo_documento->id)}}" method="post">

@csrf

@method('PUT')


<input type="hidden" name="id" value="{{$tipo_documento->id}}">

<div class="form-group">
<label for="Nombre_Tipo_Documento"> Nombre de Tipo de Documento</label>

<input class="input-group mb-3" type="text" name="Nombre_Tipo_Documento" value="{{$tipo_documento->Nombre_Tipo_Documento}}" >
</div>

<div class="form-group"> 
<label for="Siglas"> Siglas</label>
<input class="input-group mb-3" type="text" name="Siglas" value="{{$tipo_documento->Siglas}}" >
</div>

<input class="btn btn-success" type="submit" value="Actualizar Tipo de Documento">


</form>
@endforeach
@endsection