@extends('layouts.admin.app')

@section('content')

@foreach($categorias as $categoria)
<form class="table table-dark" action="{{route('categoria.update',$categoria->id)}}" method="post">

@csrf

@method('PUT')


<input type="hidden" name="id" value="{{$categoria->id}}">

<div class="form-group">
<label for="Nombre_Tipo_Documento"> Nombre de Categoria</label>

<input class="input-group mb-3" type="text" name="Nombre" value="{{$categoria->Nombre}}" >
</div>


<input class="btn btn-success" type="submit" value="Actualizar Categoria">


</form>
@endforeach
@endsection