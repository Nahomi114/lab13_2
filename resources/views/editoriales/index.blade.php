@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editoriales</h1>
        <a href="{{ route('editoriales.create') }}" class="btn btn-primary">Crear Editorial</a>
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($editoriales as $editorial)
                    <tr>
                        <td>{{ $editorial->id }}</td>
                        <td>{{ $editorial->nombre }}</td>
                        <td>
                            <a href="{{ route('editoriales.edit', $editorial->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('editoriales.destroy', $editorial->id) }}" method="POST" style="display:inline-block;">
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
