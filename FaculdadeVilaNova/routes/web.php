<?php


<<<<<<< HEAD
use App\Http\Controllers\{AlunoController,ProfessorController, PlanoFinanceiroController, CursoController};
=======
use App\Http\Controllers\CursoController;

use App\Http\Controllers\PlanoFinanceiroController;

use App\Http\Controllers\{AlunoController, ProfessorController};
>>>>>>> 551a84ff812aca9fe172ceeda01ab2ff38e74c10
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('alunos', AlunoController::class);
Route::resource('cursos', CursoController::class);
<<<<<<< HEAD
Route::resource('planos-financeiros', PlanoFinanceiroController::class);
Route::resource('professores', ProfessorController::class );
=======
Route::resource('alunos', AlunoController::class);
Route::resource('planos-financeiros', PlanoFinanceiroController::class);
Route::resource('professor', ProfessorController::class);
>>>>>>> 551a84ff812aca9fe172ceeda01ab2ff38e74c10
