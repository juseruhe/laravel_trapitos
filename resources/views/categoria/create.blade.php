@extends('layouts.admin.app')

@section('content')

<form class="table table-dark" action="{{route('categoria.store')}}" method="post">

@csrf
<div class="form-group">
<label for="Nombre de Tipo Documento">Nombre de Categoria:</label>
 <input class="input-group mb-3" type="text" name="Nombre" placeholder="Escriba de Categoria:">
 </div>


 <input class="btn btn-success" type="submit" value="Crear Categoria">

</form>
@endsection