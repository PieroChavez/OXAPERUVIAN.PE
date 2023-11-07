<!-- resources/views/nosotros.blade.php -->

@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">


    <div class="container">
        <h1 class="title">Conoce a Nuestro Equipo</h1>

        <div class="team-member">
            <img src="imagen1.jpg" alt="Miembro 1">
            <h2>Nombre del Miembro</h2>
            <p>Descripción del Miembro 1.</p>
        </div>

        <div class="team-member">
            <img src="imagen2.jpg" alt="Miembro 2">
            <h2>Nombre del Miembro</h2>
            <p>Descripción del Miembro 2.</p>
        </div>

        <!-- Puedes agregar más miembros según sea necesario -->

    </div>
@endsection
