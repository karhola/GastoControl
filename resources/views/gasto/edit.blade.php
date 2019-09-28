@extends('layout.layout')
@section('content')
    <p>EDITAR GASTO</p>
    
    <form action="/gasto/{{$gasto->id}}" method="POST">
        @method('PUT')
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE EL NOMBRE DEL GASTO</p>
        <input type="text" class="form-control" name="nom_g" value="{{$gasto->nombre_gasto}}">
        <p>INGRESE LA FECHA</p>
        <input type="text" class="form-control" name="fecha_g" value="{{$gasto->fecha_gasto}}">
        <p>INGRESE LA DESCRIPCION</p>
        <input type="text" class="form-control" name="descrip_g" value="{{$gasto->descripcion_gasto}}">
        <p>INGRESE EL MONTO</p>
        <input type="text" class="form-control" name="monto_g" value="{{$gasto->monto_gasto}}">
     <br>
        <button class="btn btn-primary" >ACTUALIZAR GASTOS</button>
    </form>
@endsection