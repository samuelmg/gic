<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Norma/Ley</th>
                <th>Identificador</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reqs as $req)
                <tr>
                    <td>{{ $req->norma->nombre }}</td>
                    <td>{{ $req->identificador }}</td>
                    <td>{{ $req->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>