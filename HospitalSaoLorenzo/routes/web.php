<?php

use App\Http\Controllers\BancoSangueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\DoacoesController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\EstagiarioController;

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


/* Banco de Sangue */
Route::get('bancodesangue', [BancoSangueController::class, 'index'])->name('bancodesangue.index');
Route::get('bancodesangue/create', [BancoSangueController::class, 'create'])->name('bancodesangue.create');
Route::post('bancodesangue', [BancoSangueController::class, 'store'])->name('bancodesangue.store');
Route::get('bancodesangue/show/{id}', [BancoSangueController::class, 'show'])->name('bancodesangue.show');
Route::get('bancodesangue/edit/{id}', [BancoSangueController::class, 'edit'])->name('bancodesangue.edit');
Route::delete('bancodesangue/delete/{id}', [BancoSangueController::class, 'destroy'])->name('bancodesangue.destroy');
Route::put('bancodesangue/{id}', [BancoSangueController::class, 'update'])->name('bancodesangue.update');


/* Doador */
Route::get('doador', [DoadorController::class, 'index'])->name('doador.index');
Route::get('doador/create', [DoadorController::class, 'create'])->name('doador.create');
Route::post('doador', [DoadorController::class, 'store'])->name('doador.store');
Route::get('doador/show/{id}', [DoadorController::class, 'show'])->name('doador.show');
Route::get('doador/edit/{id}', [DoadorController::class, 'edit'])->name('doador.edit');
Route::delete('doador/delete/{id}', [DoadorController::class, 'destroy'])->name('doador.destroy');
Route::put('doador/{id}', [DoadorController::class, 'update'])->name('doador.update');

/* Doações */
Route::get('doacoes', [DoacoesController::class, 'index'])->name('doacoes.index');
Route::get('doacoes/create', [DoacoesController::class, 'create'])->name('doacoes.create');
Route::post('doacoes', [DoacoesController::class, 'store'])->name('doacoes.store');
Route::get('doacoes/show/{id}', [DoacoesController::class, 'show'])->name('doacoes.show');
Route::get('doacoes/edit/{id}', [DoacoesController::class, 'edit'])->name('doacoes.edit');
Route::delete('doacoes/delete/{id}', [DoacoesController::class, 'destroy'])->name('doacoes.destroy');
Route::put('doacoes/{id}', [DoacoesController::class, 'update'])->name('doacoes.update');

/* Medico */
Route::get('/medico', [MedicoController::class, 'index'])->name('medico.index');
Route::get('medico/create', [MedicoController::class, 'create'])->name('medico.create');
Route::post('/medico', [MedicoController::class, 'store'])->name('medico.store');
Route::get('medico/show/{id}', [MedicoController::class, 'show'])->name('medico.show');
Route::get('medico/edit/{id}', [MedicoController::class, 'edit'])->name('medico.edit');
Route::delete('medico/delete/{id}', [MedicoController::class, 'destroy'])->name('medico.destroy');
Route::put('medico/{id}', [MedicoController::class, 'update'])->name('medico.update');
/* Estagiario */
Route::get('/estagiario', [EstagiarioController::class, 'index'])->name('estagiario.index');
Route::get('estagiario/create', [EstagiarioController::class, 'create'])->name('estagiario.create');
Route::post('/estagiario', [EstagiarioController::class, 'store'])->name('estagiario.store');
Route::get('estagiario/show/{id}', [EstagiarioController::class, 'show'])->name('estagiario.show');
Route::get('estagiario/edit/{id}', [EstagiarioController::class, 'edit'])->name('estagiario.edit');
Route::delete('estagiario/delete/{id}', [EstagiarioController::class, 'destroy'])->name('estagiario.destroy');
Route::put('estagiario/{id}', [EstagiarioController::class, 'update'])->name('estagiario.update');