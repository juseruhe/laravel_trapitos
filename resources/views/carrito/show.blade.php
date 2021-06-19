@extends('layouts.landing.app2')
@section('content')

    <!-- Productos-->
    <section class="page-section bg-light" id="productos">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nuestros productos @if(session('correo') && session('id')) {{session('correo')}} {{session('id')}}  @endif</h2>
                <hr style="color:#ac8400" ;>
                <div class="col-lg-8 mx-auto text-center"><p class="large ">Nuestros productos son totalmente hechos en COLOMBIA, Con materiales 100% originales, Hechos a medida uno de Nuestros Servicios Caracteristicos</p></div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{url('assets/img/IMG/categoria4/producto14.jpeg')}}" alt="" />
                        <h6>Chaquetas Doble faz</h6>
                        <p class="text">Diseños Exclusivos</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{url('assets/img/IMG/categoria2/producto7.jpeg')}}" alt="" />
                        <h6>Chaquetas Unisex</h6>
                        <p class="text">Materiales Colombianos</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{url('assets/img/IMG/categoria3/producto8.3.jpeg')}}" alt="" />
                        <h6>Chaquetas Antifluido</h6>
                        <p class="text ">Y MAS!!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <a class="btn btn-primary btn text-uppercase" href="#catalogo">Catalogo de productos  <i class="fas fa-arrow-circle-down"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- catalogo-->
    <section class="page-section" id="catalogo">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Catalogo</h2>
                <hr style="color:#cbb911" ;>
            </div>
        </div>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="page-section ">

                        <!-- Alertas  -->
@if(session('mensaje')=="Producto insertado en el carrito")
<div class="alert alert-success" role="alert">
<i class="fas fa-check-square"></i> {{session('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
<span aria-hidden="true">&times;</span>
</button>
</div>
@else
@endif




                    <div class="row">
                      
                            <div class="col-4" >
                                <img class="rounded-lg" src="{{asset('storage').'/'. $carrito->producto->imagen}}" alt="{{$carrito->producto->nombre_producto}}" width="250px" height="250px">
                                <h6 class="card-title">{{$carrito->producto->nombre_producto}}</h6>
                                <p class="card-text btn btn-light mb-4"> $ {{$carrito->producto->valor}} </p><br>
                                <input type="text" name="" id="" value="{{$carrito->cantidades}}">
         
                               
                                
                                <a href="#" class="btn btn-primary mb-4">Agregar al carrito</a>
                            </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>



@endsection
