@extends('layout.layout')
@section('content')
<div class="col-4">
    <div class="card mt-2 text-center">
        <div class="card-header">
            {{ $gasto->nombre_gasto }} {{ $gasto->fecha_gasto }}
        </div>
        <div class="card-body">
            Descripcion : {{ $gasto->descripcion_gasto }} <br>
            Monto : {{ $gasto->monto_gasto }} <br>
        </div>
        <div class="card-footer form-inline d-flex justify-content-center">
            <form action="/gasto/{{$gasto->id}}/edit">
                @method('GET')
                <button class="btn btn-success mr-1">EDITAR</button>
            </form>
            <form action="/gasto/{{$gasto->id}}" method="POST">                
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">ELIMINAR</button>
            </form>
        </div>
    </div>
</div>
@endsection 