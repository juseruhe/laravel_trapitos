@extends('layouts.admin.app')

@section('content')

<table class="btn btn-dark">
<tr>
<td>ID</td>
<td>Nombre Tipo de Documento</td>
<td>Siglas</td>
</tr>

@foreach($tipo_documentos as $tipo_documento)
<tr>
    
<td>{{$tipo_documento->id}}</td>
<td>{{$tipo_documento->Nombre_Tipo_Documento}}</td>
<td>{{$tipo_documento->Siglas}}</td>

</tr>
@endforeach

</table>
@endsection