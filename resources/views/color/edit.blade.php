@extends('layouts.admin.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('color.update',$color->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label for="name">Nombre del color</label>
                        <input name="color" id="name" type="text" class="form-control" value="{{$color->color}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Nuevo color</button>
                    <a class="btn btn-sm btn-danger" href="{{ route('color.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
