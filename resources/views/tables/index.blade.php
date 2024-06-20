@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Mesas</h1>
                <a href="{{ route('tables.create') }}" class="btn btn-primary mb-3">Crear mesas</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Capacidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                        <tr>
                            <td>{{ $table->number }}</td>
                            <td>{{ $table->capacity }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
