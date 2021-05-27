@extends('layouts.landing.app2')


@section('content')

    <header class="masthead" id="inicio">
        <div class="container">
            <div class="masthead-subheading">Tienda de Ropa Online</div>
            <div class="masthead-heading text-uppercase">Mis Trapitos</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Conocer mis trapitos</a>
        </div>
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
                <h3 class="section-subheading text-muted">Conoce lo que podemos ofrecerte.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse text-primary "></i>
                        </span>
                    <h4 class="my-3">Lo que buscas</h4>
                    <p class="text-muted">Encuentra todo lo que necesites.</p>
                </div>
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-laptop fa-stack-1x fa-inverse text-primary "></i>
                        </span>
                    <h4 class="my-3">Pide a domicilio</h4>
                    <p class="text-muted">Danos tu ubicación.</p>
                </div>
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class=" fas fa-lock fa-stack-1x fa-inverse text-primary "></i>
                        </span>
                    <h4 class="my-3">Prendas a la Medida</h4>
                    <p class="text-muted">Chaquetas, Pantalones, Lenceria y mucho mas!..</p>
                </div>
            </div>
        </div>
    </section>





    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contactanos</h2>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Tu nombre *"name="nombre" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Tu correo *" name="correo" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Tu tefelefo*" name="telefono" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Tu mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary text-uppercase" id="sendMessageButton" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    @endsection
