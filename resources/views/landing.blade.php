<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    <h1>Página de Inicio (landing page)</h1>
    <h2>Hola {{ $nombre }} {{ $apellido }}</h2>

    <p>
        <h3>Formulario de Contacto:</h3>
        <a href="{{ route('contacto') }}">Sin especificar</a>
        <a href="{{ route('contacto', ['tipo_persona' => 'fisica']) }}">Personas Físicas</a>
        <a href="{{ route('contacto', ['tipo_persona' => 'moral']) }}">Personas Moral</a>
    </p>
</body>
</html>