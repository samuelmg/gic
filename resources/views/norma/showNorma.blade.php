<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalle de Norma</h1>

    <h2>Nombre de norma: {{ $norma->nombre }}</h2>

    <ul>
        @foreach ($norma->requerimientos as $req)
            <li>
                {{ $req->identificador }}
            </li>
        @endforeach
    </ul>

</body>
</html>