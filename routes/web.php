<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ControllerAutores;
use App\Http\Controllers\ControllerEditoras;
use App\Http\Controllers\ControllerLivros;

Route::get('/', function () 
{

});

Route::get('/autores/novo', [ControllerAutores::class, 'create']);
Route::post('/autores', [ControllerAutores::class, 'store']);
Route::get('/autores', [ControllerAutores::class, 'index']);
Route::get('/autores/apagar/{id}', [ControllerAutores::class, 'destroy']);
Route::get('/autores/editar/{id}', [ControllerAutores::class, 'edit']);
Route::post('/autores/{id}', [ControllerAutores::class, 'update']);

Route::get('/editoras/novo', [ControllerEditoras::class, 'create']);
Route::post('/editoras', [ControllerEditoras::class, 'store']);
Route::get('/editoras', [ControllerEditoras::class, 'index']);
Route::get('/editoras/apagar/{id}', [ControllerEditoras::class, 'destroy']);

Route::get('/livros/novo', [ControllerLivros::class, 'create']);
Route::post('/livros', [ControllerLivros::class, 'store']);
