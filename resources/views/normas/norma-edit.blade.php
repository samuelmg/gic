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

    <form action="{{ route('norma.update', $norma) }}" method="post">
        @csrf
        @method('PATCH')

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $norma->nombre }}"><br>

        <label for="referencia">Referncia:</label><br>
        <input type="text" name="referencia" value="{{ $norma->referencia }}"><br>

        <label for="tipo">Tipo:</label><br>
        <select name="tipo">
            <option value="ISO" @selected($norma->tipo == 'ISO')>ISO</option>
            <option value="Ley" @selected($norma->tipo == 'Ley')>Ley</option>
        </select><br>

        <input type="submit" value="Crear">

    </form>
</body>
</html>