<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Normas</title>
</head>
<body>
    <h1>Listado de Normas</h1>

    <ul>
        @foreach ($normas as $norma)
            <li>
                <a href="{{ route('norma.show', $norma) }}">
                    {{ $norma->nombre }}
                </a>
                |
                <a href="{{ route('norma.edit', $norma) }}">
                    Editar
                </a>
                |
                <form action="{{ route('norma.destroy', $norma) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar">
                </form>
                
            </li>
        @endforeach
    </ul>
</body>
</html>