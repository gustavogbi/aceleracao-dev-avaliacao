<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\api', 'middleware' => 'auth.basic'], function () {
    Route::apiResource('/professor', 'ProfessorController');
    Route::apiResource('/aluno', 'AlunoController');
    
    Route::get('/curso/disponiveis', 'CursoControllerApi@disponiveis')->name('curso.disponiveis');
    Route::get('/curso/indisponiveis', 'CursoControllerApi@indisponiveis')->name('curso.indisponiveis');
    Route::apiResource('/curso', 'CursoControllerApi');
});
