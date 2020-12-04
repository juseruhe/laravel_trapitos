@extends('layouts.admin.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary mt-3 mb-4" href="{{ route('genero.create') }}">Crear Nuevo Rol</a>
                <table class="table table-striped mt -30 mb 4 ">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre del Genero</th>
                        <th scope="col">Fecha de Creación</th>
                        <th scope="col">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($generos as $generos)
                        <tr>
                            <td>{{$generos->id}}</td>
                            <td>{{$generos->Nombre_Genero}}</td>
                            <td>{{$generos->created_at}}</td>
                            <td>
                                <form action="{{ route('genero.destroy',$generos->id)}}"method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('genero.show',$generos->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{ route('genero.edit',$generos->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
