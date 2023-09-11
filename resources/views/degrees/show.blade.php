@extends('layouts.plantilla')

@section('title', 'Degree' . $degree->nombre)


@section('content')

    <h1>Grado</h1>
    <a href="{{ route('degrees.index') }}">Volver a la lista</a><br>
    <a href="{{ route('degrees.edit', $degree) }}">Editar grado</a><br>
    <a href="{{ route('degrees.edit', $degree) }}">Editar grado</a>

    <br>

    <p><strong>Grado </strong></p>
    <p> <strong>Nombre:</strong>{{ $degree->nombre }}</p>
    <p> <strong>Jornada: </strong> {{ $degree->jornada }} </p>
    <p> <strong>Numero de alumnos: </strong> {{ $degree->numeroAlumnos }} </p>


@endsection
