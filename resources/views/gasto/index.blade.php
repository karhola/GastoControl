@extends('layout.layout')
@section('content')
<div class="d-flex justify-content-end">
    <a href="/gasto/create" class="btn btn-primary">Nuevo Gasto</a>
</div>
<div class="row">
    @foreach ($datos as $item)
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    {{ $item->nombre_gasto }} {{ $item->fecha_gasto }}
                </div>
                <div class="card-body">
                    MONTO : {{ $item->monto_gasto }}
                </div>
                <div class="card-footer">
                    <form action="/gasto/{{$item->id}}">
                        @method('GET')
                        <button class="btn btn-primary">Ver Gasto</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection