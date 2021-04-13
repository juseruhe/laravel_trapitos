@extends('layouts.admin.app')

@section('content')


<h1> Clasificaciones </h1>

<a href="{{route('clasificacion.create')}}" class="btn btn-primary my-4">Crear Clasificación</a>

<table   class="table table-dark ">
<tr>
<td>ID</td>
<td>Nombre de Clasificación</td>
<td>Acciones</td>
</tr>

<tr>
@foreach($clasificaciones as $clasificacion)
<td>{{$clasificacion->id}} </td>
<td>{{$clasificacion->Nombre}}</td>
<td>
    <form action="{{route('clasificacion.destroy', $clasificacion->id)}}" method="post">

@csrf

@method('DELETE')

<a class="btn btn-warning" href="{{route('clasificacion.edit',$clasificacion->id)}}"> Editar</a>
<a class="btn btn-info" href="{{route('clasificacion.show',$clasificacion->id)}}">Detalles</a>
<button class="btn btn-danger"onclick="confirm('¿Desea Eliminar la Clasificación ?')"> Eliminar</button>
</form>
</td>
</tr>



@endforeach

</table>






@endsection