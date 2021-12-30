<?php


use App\Http\Controllers\{AlunoController, AulaController, ProfessorController, PlanoFinanceiroController, CursoController};
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
Route::resource('planos-financeiros', PlanoFinanceiroController::class);
Route::resource('professores', ProfessorController::class);
Route::resource('aulas', AulaController::class);



Route::get('/apialunos/index', [App\Http\Controllers\AlunoController::class, 'apiIndex'])->name('apialunos.index');