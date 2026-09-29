@extends('layouts.app')

@section('title', 'Nuestros Servicios')

@section('content')
<h2>Catálogo y Servicios Técnicos</h2>
<p>No solo vendemos juegos, te ofrecemos una experiencia completa para que tu equipo siempre rinda al máximo nivel competitivo.</p>

<div class="services-grid">
    <article class="service-card">
        <img src="{{ asset('images/reparacion.webp') }}" alt="Reparación de mandos" class="responsive-img">
        <h3>Reparación de Consolas y Mandos</h3>
        <p>¿Tu mando tiene "drift" o tu consola se sobrecalienta? Nuestro servicio técnico especializado lo soluciona rápidamente utilizando piezas originales.</p>
    </article>

    <article class="service-card">
        <img src="{{ asset('images/intercambio.webp') }}" alt="Juegos de segunda mano" class="responsive-img">
        <h3>Programa de Intercambio (Trade-in)</h3>
        <p>Trae tus juegos físicos ya superados y llévate crédito para gastar en nuevos lanzamientos. Valoramos tus títulos al mejor precio del mercado.</p>
    </article>
</div>
@endsection