@extends('Inicio')

@section('nav')
<nav>
    <ul>
        <li ><a href="/piloto">Crear piloto</a></li>
        <li ><a href="/escuderia">Crear escuderia</a></li>
        <li ><a href="/lista"> Lista</a></li>
    </ul>
</nav>
@endsection

@section('lista')

@foreach($pilotos as $piloto)
    <table>
        <td>{{$piloto->nombre}}</td>
        <td>{{$piloto->fecha_nacimiento}}</td>
        <td>{{$piloto->numero_licencia}}</td>
        <td>{{$piloto->victorias}}</td>
    </table>
@endforeach
@endsection

