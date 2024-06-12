@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Libros</h1>
    <a href="{{ route('libros.create') }}" class="btn btn-primary">Crear Libro</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->nombre }}</td>
                    <td>{{ $libro->año }}</td>
                    <td>{{ $libro->autor->nombre }}</td>
                    <td>{{ $libro->editorial->nombre }}</td>
                    <td>
                        <a href="{{ route('libros.show', $libro) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('libros.edit', $libro) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('libros.destroy', $libro) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
