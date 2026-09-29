@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<section class="hero">
    <h2>Bienvenido a la siguiente generación</h2>
    <p>En Nexus Gaming somos apasionados por los videojuegos. Encuentra las últimas novedades, consolas de nueva generación y el mejor merchandising para verdaderos gamers.</p>
    <img src="{{ asset('images/tienda.png') }}" alt="Interior de nuestra tienda de videojuegos" class="responsive-img">
</section>

<section class="features">
    <h3>¿Por qué elegirnos?</h3>
    <ul>
        <li>Envíos gratuitos en pedidos superiores a 50€.</li>
        <li>Garantía extendida de 3 años en todas las consolas.</li>
        <li>Atención al cliente por expertos en hardware y gaming.</li>
    </ul>
</section>
@endsection