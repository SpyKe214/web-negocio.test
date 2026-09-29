@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<h2>Contacta con Nosotros</h2>
<p>¿Tienes dudas sobre el estado de tu pedido, reservas de juegos o necesitas asesoramiento técnico? Nuestro equipo de soporte está aquí para ayudarte.</p>

<div class="contact-info">
    <div class="info-details">
        <ul>
            <li><strong>Dirección:</strong> Avenida Píxel 1080, Ciudad Gamer, 28080</li>
            <li><strong>Teléfono de atención:</strong> +34 900 123 456</li>
            <li><strong>Correo Electrónico:</strong> soporte@nexusgaming.com</li>
        </ul>
        <p>Antes de contactarnos por hardware defectuoso, te sugerimos revisar las políticas oficiales de <a href="https://www.playstation.com" target="_blank" rel="noopener">PlayStation</a> o <a href="https://www.xbox.com" target="_blank" rel="noopener">Xbox</a> para gestionar la garantía.</p>
    </div>
    <div class="map-container">
        <img src="{{ asset('images/mapa.webp') }}" alt="Mapa de ubicación de la tienda" class="responsive-img map-img">
    </div>
</div>
@endsection