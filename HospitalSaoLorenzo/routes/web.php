<?php

use App\Http\Controllers\PacienteController;
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

Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes/store', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/edit/{id}', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::put('/pacientes/update/{id}', [PacienteController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/destroy/{id}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');
Route::get('/pacientes/show/{id}', [PacienteController::class, 'show'])->name('pacientes.show');
