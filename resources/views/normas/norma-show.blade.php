<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Norma</title>
</head>
<body>
    <h1>
        Detalle de Norma:
        {{ $norma->nombre }}
    </h1>

    <h2>Referencia: {{ $norma->referencia }}</h2>

    <p>
        <ul>
            @foreach ($norma->requerimientos as $r)
                <li>{{ $r->identificador }}</li>
            @endforeach
        </ul>
    </p>
    
</body>
</html>