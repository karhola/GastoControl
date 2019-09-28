@extends('layout.layout')
@section('content')
    <p>NUEVO INGRESO</p>
    
    <form action="/ingreso" method="POST">
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE EL NOMBRE DEL INGRESO</p>
        <input type="text" class="form-control" name="nom_ing">
        <p>INGRESE LA FECHA</p>
        <input type="text" class="form-control" name="fecha_ing">
        <p>INGRESE LA DESCRIPCION</p>
        <input type="text" class="form-control" name="descrip_ing">
        <p>INGRESE EL MONTO</p>
        <input type="text" class="form-control" name="monto_ing">
        <br>
        <button class="btn btn-primary" >GUARDAR INGRESO</button>
    </form>
@endsection