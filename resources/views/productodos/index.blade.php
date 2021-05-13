@extends('layouts.landing.app2')
@section('content')


    <header class="masthead" id="inicio">
        <div class="container">
            <div class="masthead-heading text-uppercase">Mis Trapitos</div>
            <div class="masthead-subheading">Tienda de Ropa Online</div>
        </div>
    </header>

                @foreach($productos as $productos)

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$productos->id}}.{{$productos->nombre_producto}}</h5>

                            <img src="{{asset('storage').'/'. $productos->imagen}}" alt="{{$productos->nombre_producto}}" width="200px" height="100px">

                            <p class="card-text">{{$productos->valor}}</p>

                            <a href="{{ route('productodos.show',$productos->id)}}" class="btn btn-primary">Detalles</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                @endforeach
@endsection
