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

    <form action="{{ route('norma.store') }}" method="post">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre"><br>

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