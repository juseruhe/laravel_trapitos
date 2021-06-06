@extends('layouts.landing.app2')
@section('content')





    <!-- NEW-->
    <div class="container px-4 px-lg-5 mt">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5 mt">
            <div class="col-lg-7 mt-4"><img src="{{asset('storage').'/'. $producto->imagen}}" alt="{{$producto->nombre_producto}}" width="100%" height="90%"></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light mt-4">{{$producto->nombre_producto }}</h1>
                <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                <table class="table ">
                    <tr>
                        <th scope="col">Talla</th>
                        <td>{{$producto->Talla->talla }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Color</th>
                        <td><input type="color" disabled value="{{$producto->color}}"></td>
                    </tr>
                    <tr>
                        <th scope="col">Material</th>
                        <td>{{$producto->Material->material }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Categoria</th>
                        <td>{{$producto->Categoria->Nombre }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Clasificación</th>
                        <td>{{$producto->Clasificacion->Nombre }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Precio</th>
                        <td>{{$producto->valor }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Cantidad</th>
                        <td>{{$producto->cantidad }}</td>
                    </tr>

                </table>
                <a class="btn btn-primary" href="#!">Añadir al carrito</a>
            </div>

        </div>

    </div>

@endsection
