<?php

use App\Http\Controllers\BancoSangueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\MedicoController;

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

Route::get('/', [AcessoController::class, 'index'])->name('index');


/* Banco de sangue */
Route::get('/bancodesangue', [BancoSangueController::class, 'index'])->name('bancodesangue.index');
Route::get('/bancodesangue/novo', [BancoSangueController::class, 'new'])->name('bancodesangue.novo');
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

/* Medico */
Route::get('/medico', [MedicoController::class, 'index'])->name('medico.index');
Route::get('medico/create', [MedicoController::class, 'create'])->name('medico.create');
Route::post('/medico', [MedicoController::class, 'store'])->name('medico.store');
Route::get('medico/show/{id}', [MedicoController::class, 'show'])->name('medico.show');
Route::get('medico/edit/{id}', [MedicoController::class, 'edit'])->name('medico.edit');
Route::delete('medico/delete/{id}', [MedicoController::class, 'destroy'])->name('medico.destroy');
Route::put('medico/{id}', [MedicoController::class, 'update'])->name('medico.update');