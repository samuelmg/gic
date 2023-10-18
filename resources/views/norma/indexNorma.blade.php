<x-mi-layout>
    <h1>Listado de Normas</h1>

    <x-alerta>
        HOLA INDEX NORMAS
    </x-alerta>
    

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($normas as $norma)
                <tr>
                    <td>
                        <a href="{{ route('norma.show', $norma) }}">
                            {{ $norma->nombre }}
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{ route('norma.edit', $norma) }}">
                            Editar
                        </a>
                        |
                        <form action="{{ route('norma.destroy', $norma) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                    <td>
                        {{ $norma->user->name }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-mi-layout>