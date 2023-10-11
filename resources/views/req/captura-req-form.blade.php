<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('req.store') }}" method="post">
        @csrf
        <label for="identificador">identificador</label>
        <input type="text" name="identificador"><br>
        
        <label for="descripcion">descripcion</label>
        <input type="text" name="descripcion"><br>

        <select name="norma_id">
            @foreach ($normas as $norma)
                <option value="{{ $norma->id }}">
                    {{ $norma->nombre }}
                </option>
            @endforeach
        </select>
        <br>

        <input type="submit" value="Crear Requerimiento">
    </form>

</body>
</html>