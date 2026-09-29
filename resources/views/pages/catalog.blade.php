@extends('layouts.app')

@section('title', 'Catálogo de Juegos y Consolas')

@section('content')
<h2>Catálogo de Productos</h2>
<p>Descubre los lanzamientos más esperados, consolas de nueva generación y los accesorios mejor valorados por la comunidad.</p>

<div class="catalog-grid">
    <!-- Producto 1 -->
    <article class="product-card">
        <img src="{{ asset('images/juego1.avif') }}" alt="Portada de Elden Ring" class="responsive-img">
        <h3>Elden Ring: Shadow of the Erdtree</h3>
        <span class="platform">PS5 / Xbox Series X</span>
        <p class="price">59.99 €</p>
        <p class="description">El juego del año expande su universo con la expansión más ambiciosa hasta la fecha. Prepárate para sufrir y disfrutar a partes iguales.</p>
    </article>

     <!-- Producto 2 -->
    <article class="product-card">
        <img src="{{ asset('images/juego2.avif') }}" alt="Portada de GTA VI" class="responsive-img">
        <h3>GTA VI</h3>
        <span class="platform">PS5 / Xbox Series X</span>
        <p class="price">100.00 €</p>
        <p class="description">El juego que pretende romper el mercado, reservalo ya para obtener estilos exclusivos en las armas, coches e indumentarias de los protagonistas. Listos para disfrutar este 19 de noviembre?.</p>
    </article>

     <!-- Producto 3 -->
      <article class="product-card">
        <img src="{{ asset('images/juego3.webp') }}" alt="Portada de FC27" class="responsive-img">
        <h3>FC27</h3>
        <span class="platform">PS5 / Xbox Series X</span>
        <p class="price">80.00 €</p>
        <p class="description">El mejor juego de futbol renovado un año más con nuevos modos y equipaciones. Preparaos para alcanzar la gloria con vuestro equipo y vuestros jugadores favoritos.</p>
    </article>

    <!-- Producto 4 -->
    <article class="product-card">
        <img src="{{ asset('images/consola.webp') }}" alt="Consola PlayStation 5" class="responsive-img">
        <h3>PlayStation 5 Pro</h3>
        <span class="platform">Hardware</span>
        <p class="price">799.99 €</p>
        <p class="description">Experimenta cargas súper rápidas gracias a un SSD de ultra alta velocidad, inmersión más profunda con retroalimentación háptica.</p>
    </article>

    <!-- Producto 5 -->
    <article class="product-card">
        <img src="{{ asset('images/consola2.webp') }}" alt="Consola Xbox Series X" class="responsive-img">
        <h3>Xbox Series X</h3>
        <span class="platform">Hardware</span>
        <p class="price">499.99 €</p>
        <p class="description">La consola de Xbox más rápida y potente de la historia. Disfruta de auténtico juego en 4K, tiempos de carga casi nulos con Xbox Velocity Architecture y la función Quick Resume.</p>
    </article>

    <!-- Producto 6 -->
    <article class="product-card">
        <img src="{{ asset('images/mando.webp') }}" alt="Mando inalámbrico Pro" class="responsive-img">
        <h3>Mando Élite Inalámbrico V2</h3>
        <span class="platform">Accesorios / Xbox / PC</span>
        <p class="price">129.99 €</p>
        <p class="description">Juega como un profesional con joysticks de tensión ajustable, agarre texturizado y componentes intercambiables a tu gusto.</p>
    </article>
</div>
@endsection