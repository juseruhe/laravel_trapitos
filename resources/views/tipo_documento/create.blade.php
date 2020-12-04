@extends('layouts.admin.app')

@section('content')

<form class="table table-dark" action="{{route('tipo_documento.store')}}" method="post">

@csrf
<div class="form-group">
<label for="Nombre de Tipo Documento">Nombre de Tipo de Documento:</label>
 <input class="input-group mb-3" type="text" name="Nombre_Tipo_Documento" placeholder="Escriba el Tipo Documento">
 </div>

 <div class="form-group">
 <label for="Siglas">Siglas:</label>
 <input class="input-group mb-3" type="text" name="Siglas" placeholder="Escriba las Siglas">
 </div>

 <input class="btn btn-success" type="submit" value="Crear Tipo de Documento">

</form>
@endsection