@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Menu</h1>
                <!--<a href="" class="btn btn-primary mb-3">Crear plato</a>-->
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nombre del plato</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->dish->name }}</td>
                            <td>{{ $menu->dish->description }}</td>
                            <td>{{ $menu->dish->price }}</td>
                            <td>{{ $menu->dish->category->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
