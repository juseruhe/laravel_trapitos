@extends('layouts.admin.app')

@section('content')


<h1> Materiales</h1>

<a href="{{route('material.create')}}" class="btn btn-primary my-4">Crear Material</a>

<table   class="table table-dark ">
<tr>
<td>ID</td>
<td>Nombre de Material</td>
<td>Acciones</td>
</tr>

<tr>
@foreach($materiales as $material)
<td>{{$material->id}} </td>
<td>{{$material->Nombre}}</td>
<td>
    <form action="{{route('material.destroy',$material->id)}}" method="post">

@csrf

@method('DELETE')

<a class="btn btn-warning" href="{{route('material.edit', $material->id)}}"> Editar</a>
<a class="btn btn-info" href="{{route('material.show', $material->id)}}">Detalles</a>
<button class="btn btn-danger"onclick="confirm('¿Desea Eliminar el Material ?')"> Eliminar</button>
</form>
</td>
</tr>



@endforeach

</table>






@endsection