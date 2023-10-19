<x-mi-layout>
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
</x-mi-layout>