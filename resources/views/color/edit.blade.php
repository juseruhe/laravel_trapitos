@extends('layouts.admin.app')
@section('content')

    <section>
        <div class="login-wrap">
            <div class="login-html">

                <label for="tab-2" class="tab">Editar color</label>

                <div class="login-form">
                    <!-- FORMULARIO-->
                    <form action="{{route('color.update',$color->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="group">

                            <div class="row">
                                <div class="col">
                                    <label for="name">Nombre del color</label>
                                    <input type="text" name="color" class="input" value="{{$color->color}}">
                                </div>
                                <div class="col">

                                </div>
                            </div>

                            <br>
                            <div class="group">
                                <input type="submit" class="button" value="Actualizar color">
                            </div>
                            <br>
                    </form>

                </div>
            </div>
        </div>

        </div>
    </section>
@endsection



