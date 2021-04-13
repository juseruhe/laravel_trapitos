@extends('layouts.admin.app')

@section('content')

<table class="btn btn-dark">
<tr>
<td>ID</td>
<td>Nombre de Categoria</td>
</tr>

@foreach($categorias as $categoria)
<tr>
    
<td>{{$categoria->id}}</td>
<td>{{$categoria->Nombre}}</td>


</tr>
@endforeach

</table>
@endsection