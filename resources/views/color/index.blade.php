@extends('layouts.admin.app')
@section('content')
    <h1> Color </h1>
    <div class="container">
        <div class="row">
            <a href="{{route('color.create')}}" class="btn btn-primary my-4">Crear Color <i class="fas fa-plus-square"></i> </a>

            <div class="col-md-12" id="div1">
    <table   class="table table-striped table-dark ">
        <tr>
            <td>ID</td>
            <td>Nombre del color</td>
            <td>Acciones</td>
        </tr>
        <tr>
            @foreach($colores as $color)
                <td>{{$color->id}} </td>
                <td>{{$color->color}}</td>
                <td>
                    <form action="{{route('color.destroy', $color->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-warning" href="{{route('color.edit',$color->id)}}"><i class="fas fa-edit"></i>  Editar</a>
                        <a class="btn btn-info" href="{{route('color.show',$color->id)}}"><i class="fas fa-eye"></i> Detalles</a>
                        <button class="btn btn-danger"onclick="confirm('¿Desea Eliminar el Genero ?')"><i class="fas fa-eraser"></i>  Eliminar</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </table>
@endsection
