@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>
        <div class="mb-3">
            <label for="año" class="form-label">Año</label>
            <input type="number" name="año" id="año" class="form-control" value="{{ old('año') }}" required>
        </div>
        <div class="mb-3">
            <label for="autor_id" class="form-label">Autor</label>
            <select name="autor_id" id="autor_id" class="form-control" required>
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="editorial_id" class="form-label">Editorial</label>
            <select name="editorial_id" id="editorial_id" class="form-control" required>
                @foreach ($editoriales as $editorial)
                    <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
@endsection
