<?php

use App\Http\Controllers\QuadroMensalController;
use App\Http\Controllers\EmployerController;
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


Route::get('/quadromensal', [QuadroMensalController::class, 'index']);
Route::get('/funcionarios', [EmployerController::class, 'index']);
Route::get('/funcionario/{id}', [EmployerController::class, 'show']);
