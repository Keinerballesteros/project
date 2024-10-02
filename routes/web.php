<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\GaleriasController;
use App\Http\Controllers\CategoriasController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/*Route::get('/user/{id}', function ($id) {
 return 'ID de usuario: ' . $id;
})->where('id', '[0-9]{1,3}');



Route::resource('productos', ProductoController::class);


Route::resource('categoria',CategoriasController::class);
Route::get('cambioestadocategoria',[CategoriasController::class,'cambioestadocategoria']) -> name('cambioestadocategoria');

Route::resource('galeria',GaleriasController::class);
Route::get('cambioestadogaleria',[GaleriasController::class,'cambioestadogaleria']) -> name('cambioestadogaleria');



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'home']);
    Route::get('/categoria', [CategoriasController::class, 'categoria']);
    Route::get('/galeria', [CategoriasController::class, 'galeria']);
    });
    */