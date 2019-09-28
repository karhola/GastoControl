@extends('layout.layout')
@section('content')
<div class="d-flex justify-content-end">
    <a href="/contacto/create" class="btn btn-primary">Nuevo</a>
</div>
<div class="row">
    @foreach ($datos as $item)
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    {{ $item->nombre }} {{ $item->apellido }}
                </div>
                <div class="card-body">
                    Direccion : {{ $item->direccion }}
                </div>
                <div class="card-footer">
                    <form action="/contacto/{{$item->id}}">
                        @method('GET')
                        <button class="btn btn-primary">Ver Contacto</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection