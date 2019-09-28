@extends('layout.layout')
@section('content')
    <p>EDITAR INGRESO</p>
    
    <form action="/ingreso/{{$ingreso->id}}" method="POST">
        @method('PUT')
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE EL NOMBRE DEL INGRESO</p>
        <input type="text" class="form-control" name="nom_ing" value="{{$ingreso->nombre_ingreso}}">
        <p>INGRESE LA FECHA</p>
        <input type="text" class="form-control" name="fecha_ing" value="{{$ingreso->fecha_ingreso}}">
        <p>INGRESE LA DESCRIPCION</p>
        <input type="text" class="form-control" name="descrip_ing" value="{{$ingreso->descripcion_ingreso}}">
        <p>INGRESE EL MONTO</p>
        <input type="text" class="form-control" name="monto_ing" value="{{$ingreso->monto_ingreso}}">
     <br>
        <button class="btn btn-primary" >ACTUALIZAR INGRESO</button>
    </form>
@endsection