@extends('layout.layout')
@section('content')
<div class="d-flex justify-content-end">
    <a href="/ingreso/create" class="btn btn-primary">Nuevo Ingreso</a>
</div>
<div class="row">
    @foreach ($datos as $item)
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    {{ $item->nombre_ingreso }} {{ $item->fecha_ingreso }}
                </div>
                <div class="card-body">
                    MONTO : {{ $item->monto_ingreso }}
                </div>
                <div class="card-footer">
                    <form action="/ingreso/{{$item->id}}">
                        @method('GET')
                        <button class="btn btn-primary">Ver Ingreso</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection