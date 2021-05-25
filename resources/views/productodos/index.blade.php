@extends('layouts.landing.app2')
@section('content')


    <!-- Productos-->
    <section class="page-section bg-light" id="productos">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nuestros productos</h2>
                <h3 class="section-subheading text-muted">Una pequeña muestra de nuestros productos disponibles.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{url('assets/img/IMG/categoria4/producto14.jpeg')}}" alt="" />
                        <h4>Chaquetas Doble faz</h4>
                        <p class="text-muted">Diseños Exclusivos</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/IMG/categoria2/producto7.jpeg" alt="" />
                        <h4>Chaquetas Unisex</h4>
                        <p class="text-muted">Materiales Colombianos</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/IMG/categoria3/producto8.3.jpeg" alt="" />
                        <h4>Chaquetas Antifluido</h4>
                        <p class="text-muted">Y MAS!!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Nuestros productos son totalmente hechos en COLOMBIA, Con materiales 100% originales, Hechos a medida uno de Nuestros Servicios Caracteristicos</p></div>
            </div>
        </div>
    </section>



    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="page-section ">


                    <div class="row">
                        @foreach($productos as $productos)
                            <div class="col-4">
                                <img class="rounded-lg" src="{{asset('storage').'/'. $productos->imagen}}" alt="{{$productos->nombre_producto}}" width="250px" height="250px">
                                <h6 class="card-title">{{$productos->nombre_producto}}</h6>
                                <p class="card-text" style="color:#f30303" ;> $ {{$productos->valor}} </p>
                                <a href="{{ route('productodos.show',$productos->id)}}" class="btn btn-info mb-4">Detalles</a>
                                <a href="{{ route('productodos.show',$productos->id)}}" class="btn btn-success mb-4">Agregar al carrito</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
