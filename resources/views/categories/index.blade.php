@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Categorías</h1>
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Crear categoría</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->color }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
