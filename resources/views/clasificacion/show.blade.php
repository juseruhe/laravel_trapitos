@extends('layouts.admin.app')

@section('content')

<table class="btn btn-dark">
<tr>
<td>ID</td>
<td>Nombre de Clasificación</td>
</tr>

@foreach($clasificaciones as $clasificacion)
<tr>
    
<td>{{$clasificacion->id}}</td>
<td>{{$clasificacion->Nombre}}</td>


</tr>
@endforeach

</table>
@endsection