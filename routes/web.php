<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaControlador;

use App\Http\Controllers\ProductController;
Route::resource('products',ProductController::class);

//web.php -> Controladores(metodos) -> Vistas

Route::get('/', [paginaControlador::class, 'gestionHome'])->name('home');
Route::get('/categorias/{nombreCategoria:slug}',[paginaControlador::class,'gestionCategoria'])->name('categoria');
Route::get('/etiquetas/{nombreEtiqueta:slug}',[paginaControlador::class,'gestionEtiqueta'])->name('etiqueta');
Route::get('/preguntas/{nombrePregunta:slug}',[paginaControlador::class,'gestionPregunta'])->name('pregunta');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

