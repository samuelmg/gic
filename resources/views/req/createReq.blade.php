<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('requerimiento.store') }}" method="post">
        @csrf

        <label for="identificador">Identificador:</label><br>
        <input type="text" name="identificador" value="{{ old('identificador') }}"><br>

        <label for="parrafo">Parrafo:</label><br>
        <input type="text" name="parrafo" value="{{ old('parrafo') }}"><br>

        <label for="norma_id">Norma:</label><br>
        <select name="norma_id">
            @foreach ($normas as $norma)
                <option value="{{ $norma->id }}">
                    {{ $norma->nombre }}
                </option>
            @endforeach
        </select>

        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>