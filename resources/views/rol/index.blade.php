@extends('layouts.admin.app')
@section('content')
    <h1> Roles </h1>
    <a href="{{route('rol.create')}}" class="btn btn-primary my-4">Crear Rol <i class="fas fa-plus-square"></i> </a>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="div1">
    <table   class="table table-striped table-dark ">
        <tr>
            <td>ID</td>
            <td>Nombre del Rol</td>
            <td>Fecha de Creación</td>
            <td>Acciones</td>
        </tr>
        <tr>
            @foreach($roles as $roles)
                <td>{{$roles->id}} </td>
                <td>{{$roles->Nombre_Rol}}</td>
                <td>{{$roles->created_at}}</td>
                <td>
                    <form action="{{route('rol.destroy', $roles->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-warning" href="{{route('rol.edit',$roles->id)}}"><i class="fas fa-edit"></i>  Editar</a>
                        <a class="btn btn-info" href="{{route('rol.show',$roles->id)}}"><i class="fas fa-eye"></i> Detalles</a>
                        <button class="btn btn-danger"onclick="confirm('¿Desea Eliminar el Rol ?')"><i class="fas fa-eraser"></i>  Eliminar</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </table>
    </div>
    </div>
    </div>
@endsection


