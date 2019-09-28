@extends('layout.layout')
@section('content')
    <p>NUEVO GASTO</p>
    
    <form action="/gasto" method="POST">
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE EL NOMBRE DEL GASTO</p>
        <input type="text" class="form-control" name="nom_g">
        <p>INGRESE LA FECHA</p>
        <input type="text" class="form-control" name="fecha_g">
        <p>INGRESE LA DESCRIPCION</p>
        <input type="text" class="form-control" name="descrip_g">
        <p>INGRESE EL MONTO</p>
        <input type="text" class="form-control" name="monto_g">
        <br>
        <button class="btn btn-primary" >GUARDAR GASTO</button>
    </form>
@endsection