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

    <h2>Organizaciones</h2>
    <ul>
        @foreach ($norma->organizaciones as $org)
            <li>{{ $org->nombre }}</li>
        @endforeach
    </ul>

    {{--
    <form action="{{ route('norma.agregar-org', $norma) }}" method="POST">
        @csrf
        <input type="hidden" name="norma_id" value="{{ $norma_id }}">
        <select name="organizacion_id[]" multiple>
            @foreach ($orgs as $org)
                <option value="{{ $org->id }}">{{ $org->nombre }}</option>
            @endforeach
        </select>
    </form>
    --}}

</body>
</html>