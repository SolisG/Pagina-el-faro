<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;


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
Route::get('/', [NewsController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ruta del formulario de contacto
Route::post('/contact', 'ContactController@store')->name('contact.store');

//ruta para el request del contact form

Route::get('/contact/form', [ContactController::class, 'getForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// ruta para el request de subir una noticia
Route::resource('news', NewsController::class)->only(['create', 'store']);
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
