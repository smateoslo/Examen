@extends('Inicio')

@section('nav')
<nav>
    <ul>
        <li ><a href="/piloto">Crear piloto</a></li>
        <li ><a href="/escuderia">Crear escuderia</a></li>
        <li ><a href="/lista">Lista</a></li>
    </ul>
</nav>
@endsection

@section('formP')
<form action="/piloto" method="post">
    <label for="">nombre:</label>
    <input type="text" name="">
    <br>
    <label for="">fecha_nacimento:</label>
    <input type="date" name="">
    <br>
    <label for="">numero_licencia</label>
    <input type="number" name="">
    <br>
    <label for="">victorias</label>
    <input type="number" name="">
    <br>
    <input type="submit" value="Enviar">
</form>
@endsection

