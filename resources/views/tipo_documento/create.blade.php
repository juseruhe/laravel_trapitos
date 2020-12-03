@extends('layouts.admin.app')

@section('content')

<form action="{{route('tipo_documento.store')}}" method="post">

@csrf

<label for="Nombre de Tipo Documento">Nombre de Tipo de Documento:</label>
 <input type="text" name="Nombre_Tipo_Documento" placeholder="Escriba el Tipo Documento">


 <label for="Siglas">Siglas:</label>
 <input type="text" name="Siglas" placeholder="Escriba las Siglas">

 <input type="submit" value="Crear Tipo de Documento">

</form>
@endsection