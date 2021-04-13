@extends('layouts.admin.app')

@section('content')


<h1> Categorias</h1>

<a href="{{route('categoria.create')}}" class="btn btn-primary my-4">Crear Categoria</a>

<table   class="table table-dark ">
<tr>
<td>ID</td>
<td>Nombre de Categoría</td>
<td>Acciones</td>
</tr>

<tr>
@foreach($categorias as $categoria)
<td>{{$categoria->id}} </td>
<td>{{$categoria->Nombre}}</td>
<td>
    <form action="{{route('categoria.destroy',$categoria->id)}}" method="post">

@csrf

@method('DELETE')

<a class="btn btn-warning" href="{{route('categoria.edit',$categoria->id)}}"> Editar</a>
<a class="btn btn-info" href="{{route('categoria.show',$categoria->id)}}">Detalles</a>
<button class="btn btn-danger"onclick="confirm('¿Desea Eliminar la Categoría ?')"> Eliminar</button>
</form>
</td>
</tr>



@endforeach

</table>






@endsection