<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0. maximun-scale=1.0 minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>TIENDA VIRTUAL</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">NOMBRE DEL ROL</th>
                        <td>{{ $rol->Nombre_Rol }}</td>
                    </tr>
                    <tr>
                        <th scope="col">CREACIÓN</th>
                        <td>{{ $rol->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="col">ACTUALIZACION</th>
                        <td>{{ $rol->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('rol.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
