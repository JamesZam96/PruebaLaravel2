@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear mesa</h1>
        <form action="{{ route('tables.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Número</label>
            <input type="text" class="form-control" id="number" name="number" required>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacidad</label>
            <input type="number" class="form-control" id="capacity" name="capacity" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
    <br>
    <a href="{{route('tables.index')}}" class="btn btn-danger">Ver mesas</a>
    </div>
@endsection
