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
        <input type="text" name="nombre" value="{{ old('nombre') ?? $norma->nombre }}"><br>

        <label for="referencia">Referencia:</label><br>
        <input type="text" name="referencia" value="{{ old('referencia') ?? $norma->referencia }}"><br>

        <label for="tipo">Tipo</label><br>
        <select name="tipo">
            <option value="ISO" @selected( (old('tipo') ?? $norma->tipo) == 'ISO')>ISO</option>
            <option value="Ley" @selected( (old('tipo') ?? $norma->tipo) == 'Ley')>Ley</option>
            <option value="Normatividad" @selected( (old('tipo') ?? $norma->tipo) == 'Normatividad')>Normatividad</option>
        </select>
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
