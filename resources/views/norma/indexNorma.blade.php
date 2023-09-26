<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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


        </li>
    @endforeach
    </ul>
</body>
</html>