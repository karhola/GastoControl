@extends('layout.layout')
@section('content')
<div class="col-4">
    <div class="card mt-2 text-center">
        <div class="card-header">
            {{ $contacto->nombre }} {{ $contacto->apellido }}
        </div>
        <div class="card-body">
            Direccion : {{ $contacto->direccion }} <br>
            CI : {{ $contacto->ci }} <br>
            Telefono : {{ $contacto->telefono }} <br>
        </div>
        <div class="card-footer form-inline d-flex justify-content-center">
            <form action="/contacto/{{$contacto->id}}/edit">
                @method('GET')
                <button class="btn btn-success mr-1">EDITAR</button>
            </form>
            <form action="/contacto/{{$contacto->id}}" method="POST">                
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">ELIMINAR</button>
            </form>
        </div>
    </div>
</div>
@endsection 