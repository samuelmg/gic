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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="/norma" method="post">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}"><br>

        <label for="referencia">Referencia:</label><br>
        <input type="text" name="referencia" value="{{ old('referencia') }}"><br>

        <label for="tipo">Tipo</label><br>
        <select name="tipo">
            <option value="ISO" @selected(old('tipo') == 'ISO')>ISO</option>
            <option value="Ley" @selected(old('tipo') == 'Ley')>Ley</option>
            <option value="Normativa" @selected(old('tipo') == 'Normativa')>Normativa</option>
        </select>
        <br>

        <select name="organizacion_id[]" multiple>
            @foreach ($orgs as $org)
                <option value="{{ $org->id }}" @selected( array_search($org->id, old('organizacion_id') ?? []) !== false )>
                    {{ $org->nombre }}
                </option>
            @endforeach
        </select>

        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
