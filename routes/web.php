<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;// aqui definimimos as rotas

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
//Rota para exibir o formulario de cadastro
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');


Route::get('supports/{id}', [SupportController::class, 'show'])->name('supports.show');//recebe um parametro dinâmico o {id]

//Rota que recebe o request do formulario
Route::post('supports', [SupportController::class, 'store'])->name('supports.store');

//rota para a listagem do support
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});

