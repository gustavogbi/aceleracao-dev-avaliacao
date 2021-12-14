<?php

use App\Http\Controllers\BancoSangueController;
use App\Http\Controllers\DoadorController;
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

Route::get('/', function () {
    return view('welcome');
});


/* Banco de sangue */
Route::get('/bancodesangue', [BancoSangueController::class, 'index'])->name('bancodesangue.index');;
Route::get('/bancodesangue/novo', [BancoSangueController::class, 'new'])->name('bancodesangue.git ');;
Route::post('/bancodesangue/insere', [BancoSangueController::class, 'insert'])->name('bancodesangue.inserir');
Route::delete('/bancodesangue/remover/{id}', [BancoSangueController::class, 'delete'])->name('bancodesangue.remover');
Route::get('/bancodesangue/editar/{id}', [BancoSangueController::class, 'edit'])->name('bancodesangue.editar');
Route::put('/bancodesangue/{id}', [BancoSangueController::class, 'update'])->name('bancodesangue.update');
Route::get('/bancodesangue/{id}', [BancoSangueController::class, 'show'])->name('bancodesangue.exibe');


/* Doador */
Route::get('doador', [DoadorController::class, 'index'])->name('doador.index');
Route::get('doador/create', [DoadorController::class, 'create'])->name('doador.create');
Route::post('doador', [DoadorController::class, 'store'])->name('doador.store');
Route::get('doador/show/{id}', [DoadorController::class, 'show'])->name('doador.show');
Route::get('doador/edit/{id}', [DoadorController::class, 'edit'])->name('doador.edit');
Route::delete('doador/delete/{id}', [DoadorController::class, 'destroy'])->name('doador.destroy');
Route::put('doador/{id}', [DoadorController::class, 'update'])->name('doador.update');