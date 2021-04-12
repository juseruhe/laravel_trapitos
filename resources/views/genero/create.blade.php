@extends('layouts.admin.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('genero.store')}}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label for="name">Nombre del Nuevo Genero</label>
                        <input name="Nombre_Genero" id="name" type="text" class="form-control">
                        <button type="submit" class="btn btn-primary">Guardar Nuevo Genero</button>
                        <a class="btn btn-sm btn-danger" href="{{route('genero.index')}}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
