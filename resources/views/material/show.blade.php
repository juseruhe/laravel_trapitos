@extends('layouts.admin.app')

@section('content')

<table class="btn btn-dark">
<tr>
<td>ID</td>
<td>Nombre de Material</td>
</tr>

@foreach($materiales as $material)
<tr>
    
<td>{{$material->id}}</td>
<td>{{$material->Nombre}}</td>


</tr>
@endforeach

</table>
@endsection