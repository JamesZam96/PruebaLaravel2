<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
//rutas login y registro
Route::get('/',[AuthController::class,'loginForm'])->name('login.form');
Route::post('/',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'registerForm'])->name('register.form');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

//rutas categoria
Route::get('/categories/create', [CategoryController::class, 'create'])->middleware('auth')->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->middleware('auth')->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth')->name('categories.index');

//rutas platos
Route::get('/dishes/create', [DishController::class, 'create'])->middleware('auth')->name('dishes.create');
Route::post('/dishes', [DishController::class, 'store'])->middleware('auth')->name('dishes.store');
Route::get('/dishes', [DishController::class, 'index'])->middleware('auth')->name('dishes.index');

//rutas mesas
Route::get('/tables/create', [TableController::class, 'create'])->middleware('auth')->name('tables.create');
Route::post('/tables', [TableController::class, 'store'])->middleware('auth')->name('tables.store');
Route::get('/tables', [TableController::class, 'index'])->middleware('auth')->name('tables.index');

//rutas menu
Route::get('/menus/create', [MenuController::class, 'create'])->middleware('auth')->name('menus.create');
Route::post('/menus', [MenuController::class, 'store'])->middleware('auth')->name('menus.store');
Route::get('/menus', [MenuController::class, 'index'])->middleware('auth')->name('menus.index');
