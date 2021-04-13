@extends('layouts.admin.app')

@section('content')

@foreach($clasificaciones as $clasificacion)
<form class="table table-dark" action="{{route('clasificacion.update',$clasificacion->id)}}" method="post">

@csrf

@method('PUT')


<input type="hidden" name="id" value="{{$clasificacion->id}}">

<div class="form-group">
<label for="Nombre_Tipo_Documento"> Nombre de Clasificación</label>

<input class="input-group mb-3" type="text" name="Nombre" value="{{$clasificacion->Nombre}}" >
</div>


<input class="btn btn-success" type="submit" value="Actualizar Clasificación">


</form>
@endforeach
@endsection