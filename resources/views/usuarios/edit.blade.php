@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuario</h1>
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="DNI" class="form-label">DNI</label>
                <input type="text" class="form-control" id="DNI" name="DNI" value="{{ $usuario->DNI }}" required>
            </div>
            <div class="mb-3">
                <label for="dirección" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="dirección" name="dirección" value="{{ $usuario->dirección }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
