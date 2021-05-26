@extends('layouts.landing.app2')

@section('content')
    <!-- login -->
    <link href="{{url('css/styles3.css')}}" rel="stylesheet" />
    <section class="fondo">
        <!-- Formulario inicio sesion-->
        <div class="login-wrap" class="login1">




        
            <div class="login-html">
           


       
                <label for="tab-1" class="tab">Ingresar</label>
                <br>
                <div class="login-form">
                    <form class="sign-in-htm" action="{{route('login.authenticate')}}" method="POST">
                    @csrf
                        <div class="group">
                            <label for="usua" class="label">Usuario: </label>
                            <input required id="username" name="email" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="contr" class="label">Contraseña: </label>
                            <input required id="password" name="password" type="password" class="input" data-type="password">
                        </div>
                        
                        <div class="group">
                            <input type="submit" class="button" value="Ingresar">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="https://hidden-lake-05478.herokuapp.com/reestablecer/reestablecercontraseña.php">¿Olvidaste Tu Contraseña?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
