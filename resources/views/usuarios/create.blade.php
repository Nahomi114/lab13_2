@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Usuario</h1>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="DNI" class="form-label">DNI</label>
                <input type="text" class="form-control" id="DNI" name="DNI" required>
            </div>
            <div class="mb-3">
                <label for="dirección" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="dirección" name="dirección" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
