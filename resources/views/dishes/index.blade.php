@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Platos</h1>
                <a href="{{ route('dishes.create') }}" class="btn btn-primary mb-3">Crear plato</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dishes as $dish)
                        <tr>
                            <td>{{ $dish->name }}</td>
                            <td>{{ $dish->description }}</td>
                            <td>{{ $dish->price }}</td>
                            <td>{{ $dish->category->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
