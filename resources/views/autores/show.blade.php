@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Autor</h1>
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <p>{{ $autor->nombre }}</p>
        </div>
        <a href="{{ route('autores.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('autores.destroy', $autor->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection
