@extends('layouts.app')

@section('content')

    <h1>{{ $entrada->titulo }}</h1>

    <div class="container mx-auto">

        <table class="tabla-alterna border my-8">
            <tbody>
            <tr>
                <th>Texto</th>
                <td>{{ $entrada->texto }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ $entrada->fecha }}</td>
            </tr>
            <tr>
                <th>Visible</th>
                <td>{{ $entrada->visible ? 'Sí' : 'No' }}</td>
            </tr>
            </tbody>
        </table>

        <div class="pt-4">
            <a class="btn-secondary" href="{{ route('entradas.index') }}">Volver</a>
        </div>
    </div>
@endsection
