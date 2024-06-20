@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea tu menú</h1>
    <p>Bienvenido, {{ Auth::user()->name }}!</p>
    <p>Para crear un menú y sus respectivos platos primero debes crear una categoría</p>
    <a href="{{route('categories.create')}}" class="btn btn-danger">Crear categoría</a>
    <br>
    <br>
    <a href="{{route('dishes.create')}}" class="btn btn-danger">Crear plato</a>
    <br>
    <br>
    <a href="{{route('tables.create')}}" class="btn btn-danger">Crear mesa</a>
    <br>
    <br>
    <a href="{{route('menus.create')}}" class="btn btn-danger">Crear menú</a>
    <br>
    <br>
    <a href="{{route('menus.index')}}" class="btn btn-primary">Ver menú</a>
</div>

@endsection
