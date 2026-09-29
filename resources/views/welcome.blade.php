<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenida - Laravel</title>
</head>
<body>
    <div style="text-align: center; margin-top: 50px; font-family: sans-serif;">
        <h1>Archivo original de Laravel</h1>
        <p>Esta es la vista que venía por defecto, pero ha sido reemplazada.</p>
        <p>Tu proyecto ahora utiliza el controlador para cargar <strong>pages.home</strong> al entrar en la página principal.</p>
        <a href="{{ route('home') }}">Ir a mi tienda de videojuegos</a>
    </div>
</body>
</html>