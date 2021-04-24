@extends('layouts.admin.app')

@section('content')

@foreach($materiales as $material)
<form class="table table-dark" action="{{route('material.update', $material->id)}}" method="post">

@csrf

@method('PUT')


<input type="hidden" name="id" value="{{$material->id}}">

<div class="form-group">
<label for="Nombre_Tipo_Documento"> Nombre de Material</label>

<input class="input-group mb-3" type="text" name="Material" value="{{$material->material}}" >
</div>


<input class="btn btn-success" type="submit" value="Actualizar Material">


</form>
@endforeach
@endsection