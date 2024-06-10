@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Autor</h1>
        <form action="{{ route('autores.update', $autore->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $autore->nombre }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
