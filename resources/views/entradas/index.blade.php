@extends('layouts.app')

@section('content')

    <h1>Entradas</h1>

    <div class="container mx-auto">

        <table class="container table-fixed tabla-hover border my-8">
            <thead>
            <tr>
                <th>Título</th>
                <th>Fecha</th>
                <th class="text-center">Visible</th>
                <th colspan="2" class="w-1/6">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($entradas as $entrada)
                <tr>
                    <td>
                        <a href="{{ route('entradas.show', $entrada->id) }}">{{ $entrada->titulo }}</a>
                    </td>
                    <td>{{ $entrada->fecha }}</td>
                    <td class="text-center">{{ $entrada->visible ? 'Sí' : 'No' }}</td>
                    <td>
                        <a class="btn-secondary" href="{{ route('entradas.edit', $entrada->id) }}">Editar</a>
                    </td>
                    <td class="text-left">
                        <form action="{{ route('entradas.destroy', $entrada->id) }}" method="POST"
                              onsubmit="return confirm('¿Estás seguro?');">
                            @csrf
                            @method('DELETE')
                            <input class="btn-danger" type="submit" name="borrar" value="Borrar"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="pt-4">
            <a class="btn-primary" href="{{ route('entradas.create') }}">Nueva entrada</a>
        </div>
    </div>
@endsection
