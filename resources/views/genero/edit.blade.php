@extends('layouts.admin.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('genero.update',$genero->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label for="name">Nombre del Genero</label>
                        <input name="Nombre_Genero" id="name" type="text" class="form-control" value="{{$genero->Nombre_Genero}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Nuevo Genero</button>
                    <a class="btn btn-sm btn-danger" href="{{ route('genero.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection

