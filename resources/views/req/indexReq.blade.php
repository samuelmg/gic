<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Requerimientos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Norma</th>
                <th>Identificador</th>
                <th>Parrafo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reqs as $requerimiento)
                <tr>
                    <td>{{ $requerimiento->norma->nombre }}</td>
                    <td>{{ $requerimiento->identificador }}</td>
                    <td>{{ $requerimiento->parrafo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>