@extends('Inicio')

@section('nav')
<nav>
    <ul>
        <li ><a href="/piloto">Crear piloto</a></li>
        <li ><a href="/escuderia">Crear escuderia</a></li>
        <li ><a href="/lista">Lista </a></li>
    </ul>
</nav>
@endsection

@section('formE')
<form action="/piloto" method="post">
    <label for="">nombre:</label>
    <input type="text">
    <br>
    <label for="">fecha_creacion:</label>
    <input type="date">
    <br>
    <label for="">num_pilotos</label>
    <input type="number">
    <br>
    <label for="">sobre_presupuesto</label>
    <input type="number">
    <br>
    <input type="submit" value="Enviar">
</form>
@endsection

