@extends('layouts.admin.app')
@section('content')

    <section>
        <div class="login-wrap">
            <div class="login-html">

                <label for="tab-2" class="tab">Registrar Tipo de Documento</label>

                <div class="login-form">
                    <!-- FORMULARIO-->
                    <form action= "{{route('producto.store')}}" method="POST" >
                        @csrf
                        <div class="group">

                            <div class="row">
                                <div class="col">
                                    <label for="name">Nombre del Nuevo Producto</label>
                                    <input type="text" name="nombre_producto" class="input">
                                </div>
                                <div class="col">
                                    <label for="name">Imagén del Producto</label>
                                    <input type="file" name="imagen"  class="input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Talla</label>
                                    <select name="talla_id" id="" class="input">
                                        @foreach($tallas as $talla)
                                            <option value="{{$talla->id}}">{{$talla->talla}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="name">Color</label>
                                    <select name="color_id" id="" class="input">
                                        @foreach($colores as $color)
                                            <option value="{{$color->id}}">{{$color->color}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Materiales</label>
                                    <select name="material_id" id="" class="input">
                                        @foreach($materiales as $material)
                                            <option value="{{$material->id}}">{{$material->material}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="name">Categoria</label>
                                    <select name="categoria_id" id="" class="input">
                                        @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->Nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Clasificación</label>
                                    <select name="clasificacion_id" id="" class="input">
                                        @foreach($clasificaciones as $clasificacion)
                                            <option value="{{$clasificacion->id}}">{{$clasificacion->Nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="name">Precio</label>
                                    <input type="number" name="valor" id="name" class="input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="name">Cantidad</label>
                                    <input id="name" type="text" name="cantidad" class="input">
                                </div>
                                <div class="col">

                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="button" value="Guardar Nuevo Producto">
                                </div>
                                <div class="col">
                                    <a class="button" type="submit"  href="{{route('producto.index')}}">Cancelar</a>
                                </div>
                            </div>


                    </form>

                </div>
            </div>
        </div>
        </div>
    </section>


@endsection
