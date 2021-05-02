
@extends('layouts.admin.app')
@section('content')
    <h1> Generos </h1>
    <div id="div1">
    <a href="{{route('genero.create')}}" class="btn btn-primary my-4">Crear Genero <i class="fas fa-plus-square"></i> </a>
    <table   class="table table-dark ">
        <tr>
            <td>ID</td>
            <td>Nombre del Genero</td>
            <td>Fecha de Creación</td>
            <td>Acciones</td>
        </tr>
        <tr>
            @foreach($generos as $generos)
                <td>{{$generos->id}}</td>
                <td>{{$generos->Nombre_Genero}}</td>
                <td>{{$generos->created_at}}</td>
                <td>
                    <form action="{{route('genero.destroy', $generos->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-warning" href="{{route('genero.edit',$generos->id)}}"><i class="fas fa-edit"></i>  Editar</a>
                        <a class="btn btn-info" href="{{route('genero.show',$generos->id)}}"><i class="fas fa-eye"></i> Detalles</a>
                        <button class="btn btn-danger"onclick="confirm('¿Desea Eliminar el genero ?')"><i class="fas fa-eraser"></i>  Eliminar</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection
