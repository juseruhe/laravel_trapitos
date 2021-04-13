@extends('layouts.admin.app')

@section('content')

<form class="table table-dark" action="{{route('material.store')}}" method="post">

@csrf
<div class="form-group">
<label for="Nombre de Tipo Documento">Nombre de Material:</label>
 <input class="input-group mb-3" type="text" name="Nombre" placeholder="Escriba Nombre de Material:">
 </div>


 <input class="btn btn-success" type="submit" value="Crear Material">

</form>
@endsection