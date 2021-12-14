<?php

use App\Http\Controllers\BancoSangueController;
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
Route::get('/bancodesangue/novo', [BancoSangueController::class, 'new'])->name('bancodesangue.novo');;
Route::post('/bancodesangue/insere', [BancoSangueController::class, 'insert'])->name('bancodesangue.inserir');
Route::delete('/bancodesangue/remover/{id}', [BancoSangueController::class, 'delete'])->name('bancodesangue.remover');
Route::get('/bancodesangue/editar/{id}', [BancoSangueController::class, 'edit'])->name('bancodesangue.editar');
Route::put('/bancodesangue/{id}', [BancoSangueController::class, 'update'])->name('bancodesangue.update');
Route::get('/bancodesangue/{id}', [BancoSangueController::class, 'show'])->name('bancodesangue.exibe');
