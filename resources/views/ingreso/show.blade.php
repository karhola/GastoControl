@extends('layout.layout')
@section('content')
<div class="col-4">
    <div class="card mt-2 text-center">
        <div class="card-header">
            {{ $ingreso->nombre_ingreso }} {{ $ingreso->fecha_ingreso }}
        </div>
        <div class="card-body">
            Descripcion : {{ $ingreso->descripcion_ingreso }} <br>
            Monto : {{ $ingreso->monto_ingreso }} <br>
        </div>
        <div class="card-footer form-inline d-flex justify-content-center">
            <form action="/ingreso/{{$ingreso->id}}/edit">
                @method('GET')
                <button class="btn btn-success mr-1">EDITAR</button>
            </form>
            <form action="/ingreso/{{$ingreso->id}}" method="POST">                
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">ELIMINAR</button>
            </form>
        </div>
    </div>
</div>
@endsection 