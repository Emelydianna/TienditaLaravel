<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ProductosController;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () { return view('home');
})->middleware('auth');

Route::resource('/clientes', ClientesController::class);
Route::resource('/productos', ProductosController::class );
Route::resource('/categorias', CategoriasController::class);
Route::resource('/marcas', MarcasController::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
