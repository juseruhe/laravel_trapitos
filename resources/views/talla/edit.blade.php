@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('talla.update',$tallas->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-4">
                    <label for="name">Nombre del talla</label>
                    <input name="talla" id="name" type="text" class="form-control " value="{{$tallas->talla}}">
                </div>
               <button type="submit" class="btn btn-primary">Guardar Nuevo Rol</button>
                <a class="btn btn-sm btn-danger" href="{{ route('talla.index')}}">Cancelar</a>
            </form>

        </div>
    </div>
</div>
@endsection

