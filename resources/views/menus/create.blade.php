@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h1">Crear menú</p>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="dish_id">Plato</label>
            <select class="form-control" id="dish_id" name="dish_id" required>
                @foreach($dishes as $dish)
                    <option value="{{ $dish->id }}">{{ $dish->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
