@extends('layouts.landing.app2')
@section('content')

    <!-- Productos-->
    <section class="page-section bg-light" id="productos">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nuestros productos</h2><hr>
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Nuestros productos son totalmente hechos en COLOMBIA, Con materiales 100% originales, Hechos a medida uno de Nuestros Servicios Caracteristicos</p></div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{url('assets/img/IMG/categoria4/producto14.jpeg')}}" alt="" />
                        <h6>Chaquetas Doble faz</h6>
                        <p class="text-muted">Diseños Exclusivos</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/IMG/categoria2/producto7.jpeg" alt="" />
                        <h6>Chaquetas Unisex</h6>
                        <p class="text-muted">Materiales Colombianos</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/IMG/categoria3/producto8.3.jpeg" alt="" />
                        <h6>Chaquetas Antifluido</h6>
                        <p class="text-muted ">Y MAS!!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <a class="btn btn-primary btn-xl text-uppercase" href="#catalogo">Catalogo de productos</a>
                </div>
            </div>
        </div>
    </section>


    <!-- catalogo-->
    <section class="page-section" id="catalogo">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Catalogo</h2><hr>
            </div>
        </div>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="page-section ">


                    <div class="row">
                        @foreach($productos as $productos)
                            <div class="col-4">
                                <img class="rounded-lg" src="{{asset('storage').'/'. $productos->imagen}}" alt="{{$productos->nombre_producto}}" width="250px" height="250px">
                                <h6 class="card-title">{{$productos->nombre_producto}}</h6>
                                <p class="card-text btn btn-success mb-4"> $ {{$productos->valor}} </p><br>
                                <a href="{{ route('productodos.show',$productos->id)}}" class="btn btn-info mb-4">Detalles</a>
                                <a href="{{ route('productodos.show',$productos->id)}}" class="btn btn-primary mb-4">Agregar al carrito</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>



@endsection
