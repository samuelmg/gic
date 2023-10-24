<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>
    <h2>Formulario para {{ $tipo_persona ?? 'público en general' }}</h2>

    <form action="">
        <label for="correo">Correo</label><br>
        <input type="text" name="correo" id="correo"><br>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        @if($tipo_persona == 'Moral')
            <label for="razon_social">Razon Social</label><br>
            <input type="text" name="razon_social" id="razon_social"><br>
        @endif
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>