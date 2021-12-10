<?php

use App\Http\Controllers\QuadroMensalController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\ItemController;
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


Route::get('/quadromensal', [QuadroMensalController::class, 'index'])->name('quadroMensal');
Route::get('/funcionarios', [EmployerController::class, 'index'])->name('funcionarios');
Route::get('/funcionario/{id}', [EmployerController::class, 'show'])->name('funcionario.show');
Route::get('/itens', [ItemController::class, 'index'])->name('itens');
Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');
