<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0. maximun-scale=1.0 minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>TIENDA VIRTUAL MT</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('rol.update',$rol->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-4">
                    <label for="name">Nombre del rol</label>
                    <input name="Nombre_Rol" id="name" type="text" class="form-control" value="{{$rol->Nombre_Rol}}">
                </div>
               <button type="submit" class="btn btn-primary">Guardar Nuevo Rol</button>
                <a class="btn btn-sm btn-danger" href="{{ route('rol.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
