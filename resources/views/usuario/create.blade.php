@extends('layouts.admin.app')
@section('content')

    <section>
        <div class="login-wrap">
            <div class="login-html">

                <label for="tab-2" class="tab">Registrar Usuario</label>

                <div class="login-form">
                    <!-- FORMULARIO-->
                    <form action="{{route('usuario.store')}}" method="POST">
                        @csrf
                        <div class="group">

                            <div class="row">
                                <div class="col">
                                    <label for="name">Tipo de Documento</label>
                                    <select name="tipo_documento_id" class="input">
                                        @foreach($tipo_documentos as $tipo_documento)
                                            <option value="{{$tipo_documento->id}}">{{$tipo_documento->Nombre_Tipo_Documento}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="name">Número de Documento</label>
                                    <input type="text" name="numero_documento" class="input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Nombres</label>
                                    <input type="text" name="nombres" class="input">
                                </div>
                                <div class="col">
                                    <label for="name">Apellidos</label>
                                    <input type="text" name="apellidos" class="input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Género</label>
                                    <select name="genero_id" class="input">
                                        @foreach($generos as $genero)
                                            <option value="{{$genero->id}}">{{$genero->Nombre_Genero}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="name">Fecha de Nacimiento</label>
                                    <input type="date" name="fecha_nacimiento" class="input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Correo</label>
                                    <input type="text" name="email" class="input">
                                </div>
                                <div class="col">
                                    <label for="name">Contraseña</label>
                                    <input type="password" name="password" class="input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Dirección</label>
                                    <input type="text" name="direccion" class="input">
                                </div>
                                <div class="col">
                                    <label for="name">Teléfono</label>
                                    <input type="text" name="telefono" class="input">
                                </div>
                            </div>




                            <div class="row">
                                <div class="col">
                                    <label for="name">Rol</label>
                                    <select  name="rol_id" class="input">
                                        @foreach($roles as $rol)
                                            <option  value="{{$rol->id}}">{{$rol->Nombre_Rol}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">

                                </div>
                            </div>
                            <br>
                            <div class="group">
                                <input type="submit" class="button" value="Crear Nuevo Usuario">
                            </div>
                            <br>
                    </form>

                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection
