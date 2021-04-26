@extends('layouts.admin.app')
@section('content')

    <h1>Detalles del color:</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">

                    <table class="table table-striped">
                        <tr>
                            <th scope="col">ID</th>
                            <td>{{ $color->id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">NOMBRE DEL COLOR</th>
                            <td>{{ $color->color }}</td>
                        </tr>
                    </table>

                    <a class="btn btn-primary btn-sm" href="{{ route('color.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

