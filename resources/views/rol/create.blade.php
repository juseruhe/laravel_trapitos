@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
           <form action="{{route('rol.store')}}" method="POST">
               @csrf
               <div class="form-group mt-4">
                   <label for="name">Nombre del Nuevo Rol</label>
                   <input name="Nombre_Rol" id="name" type="text" class="form-control">
                   <button type="submit" class="btn btn-primary">Guardar Nuevo Rol</button>
                   <a class="btn btn-sm btn-danger" href="{{route('rol.index')}}">Cancelar</a>
               </div>
           </form>
        </div>
    </div>
</div>
@endsection
