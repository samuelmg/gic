<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Norma</title>
</head>
<body>
    <h1>Agregar Norma</h1>

    <form action="/norma" method="post">
        @csrf

        <label for="nomre">Nombre:</label><br>
        <input type="text" name="nomre"><br>

        <label for="referencia">Referncia:</label><br>
        <input type="text" name="referencia"><br>

        <label for="tipo">Tipo:</label><br>
        <select name="tipo">
            <option value="ISO">ISO</option>
            <option value="Ley">Ley</option>
        </select><br>

        <input type="submit" value="Crear">

    </form>
</body>
</html>