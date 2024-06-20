@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear categoría</h1>
        <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Codigo de color</label>
            <input type="text" class="form-control" id="color" name="color" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
    <br>
    <a href="{{route('categories.index')}}" class="btn btn-danger">Ver categorías</a>
    </div>
@endsection
