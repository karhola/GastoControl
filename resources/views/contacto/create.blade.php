@extends('layout.layout')
@section('content')
    <p>NUEVO CONTACTO</p>
    
    <form action="/contacto" method="POST">
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE SU NOMBRE</p>
        <input type="text" class="form-control" name="nombre">
        <p>INGRESE SU APELLIDO</p>
        <input type="text" class="form-control" name="apellido">
        <p>INGRESE SU DIRECCION</p>
        <input type="text" class="form-control" name="direccion">
        <p>INGRESE SU CI</p>
        <input type="text" class="form-control" name="ci">
        <p>INGRESE SU TELEFONO</p>
        <input type="text" class="form-control" name="telefono">
        <br>
        <button class="btn btn-primary" >ENVIAR CONTACTO</button>
    </form>
@endsection