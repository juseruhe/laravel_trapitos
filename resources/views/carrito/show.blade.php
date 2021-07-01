@extends('layouts.landing.app2')
@section('content')






    <!-- Productos-->
    <section class="page-section bg-light" id="productos">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nuestros productos @if(session('correo') && session('id')) {{session('correo')}}   @endif</h2>
                <hr style="color:#ac8400" ;>
                <div class="col-lg-8 mx-auto text-center"><p class="large ">Nuestros productos son totalmente hechos en COLOMBIA, Con materiales 100% originales, Hechos a medida uno de Nuestros Servicios Caracteristicos</p></div>
            </div>
           

            <div class="row">
                <div class="text-center">
                    <a class="btn btn-primary btn text-uppercase" href="#catalogo">Ver Productos <i class="fas fa-arrow-circle-down"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- catalogo-->
    <section class="page-section" id="catalogo">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Mi Carrito de Compras</h2>
                <hr style="color:#cbb911" ;>
            </div>
        </div>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="page-section ">

                      
<!-- Alertas  -->
@if(session('mensaje')=="Creado Correctamente")
<div class="alert alert-success" role="alert">
<i class="fas fa-check-square"></i> {{session('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
<span aria-hidden="true">&times;</span>
</button>
</div>
@elseif(session('mensaje')=="Producto eliminado del carrito")
<div class="alert alert-danger" role="alert">
<i class="fas fa-times-circle"></i> {{session('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
<span aria-hidden="true">&times;</span>
</button>
</div>
@else
@endif




                    <div class="row">
                       @foreach($carritos as $carrito)
                            <div class="col-4" >
                                <img class="rounded-lg" src="{{asset('storage').'/'. $carrito->producto->imagen}}" alt="{{$carrito->producto->nombre_producto}}" width="250px" height="250px">
                                <h6 class="card-title">{{$carrito->producto->nombre_producto}}</h6>
                                <p class="card-text btn btn-light mb-4"> $ {{number_format($carrito->producto->valor,2)}} </p><br>
                                <p class="card-text btn btn-light mb-4"> Cantidad: {{$carrito->cantidades}} </p><br>
         
                               <form action="{{route('carrito.destroy',$carrito->id)}}" method="post">
                               @csrf 
                               @method('DELETE')
                               <input type="hidden" name="usuario_id" value="{{session('id')}}">
                               <button type="submit" class="btn btn-danger">Eliminar Producto</button>
                               </form>
                                
                               
                                
                            </div>

                            
                @endforeach

                <p>${{number_format($total,2)}}</p>
               
               @if($total != 0)
                <button type="submit" class="btn btn-success btn-lg mt-4">Pagar</button>
               @else
               @endif
                    </div>
       

            <form action="{{route('usuariologueado.index')}}" method="post"> 
            @csrf
            <input type="hidden" name="email" value="{{session('correo')}}">
            <input type="hidden" name="id" value="{{session('id')}}"> 
            <button class="btn btn-warning mt-4 btn-lg">Volver</button>            
            </form>
            

                </div>
                
            </div>
        </div>
    </div>
    </section>


            
          

@endsection
