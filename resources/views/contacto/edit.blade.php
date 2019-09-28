@extends('layout.layout')
@section('content')
    <p>EDITAR CONTACTO</p>
    
    <form action="/contacto/{{$contacto->id}}" method="POST">
        @method('PUT')
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE SU NOMBRE</p>
        <input type="text" class="form-control" name="nombre" value="{{$contacto->nombre}}">
        <p>INGRESE SU APELLIDO</p>
        <input type="text" class="form-control" name="apellido" value="{{$contacto->apellido}}">
        <p>INGRESE SU DIRECCION</p>
        <input type="text" class="form-control" name="direccion" value="{{$contacto->direccion}}">
        <p>INGRESE SU CI</p>
        <input type="text" class="form-control" name="ci" value="{{$contacto->ci}}">
        <p>INGRESE SU TELEFONO</p>
        <input type="text" class="form-control" name="telefono" value="{{$contacto->telefono}}">
        <br>
        <button class="btn btn-primary" >ACTUALIZAR CONTACTO</button>
    </form>
@endsection