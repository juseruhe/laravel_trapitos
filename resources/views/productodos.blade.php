@extends('layouts.landing.app2')
@section('content')

                @foreach($productos as $productos)

            <div class="col-sm-6">
                    <div class="card">

                        <img src="{{asset('storage').'/'. $productos->imagen}}" alt="{{$productos->nombre_producto}}" width="200px" height="100px">
                        <div class="card-body">

                            <h5 class="card-title">{{$productos->id}}.{{$productos->nombre_producto}}</h5>

                            <p class="card-text">{{$productos->valor}}</p>

                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
            </div>
                    @endforeach
                    </tbody>
                </table>



@endsection
