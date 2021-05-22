@extends('layouts.landing.app2')
@section('content')

    <table class="mt-5">

        <tr>
            <th scope="col">ID</th>
            <td>{{$producto->id}}</td>
        </tr>
        <tr>
            <th scope="col">Nombre</th>
            <td>{{$producto->nombre_producto }}</td>
        </tr>
        <tr>
            <th scope="col">Imagén</th>
            <td><img src="{{asset('storage').'/'. $producto->imagen}}" alt="{{$producto->nombre_producto}}" width="200px" height="100px"></td>
        </tr>
        <tr>
            <th scope="col">Talla</th>
            <td>{{$producto->Talla->talla }}</td>
        </tr>
        <tr>
            <th scope="col">Color</th>
            <td>{{$producto->Color->color }}</td>
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

@endsection
