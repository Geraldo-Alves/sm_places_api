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

// Rotas de autenticação e Registro
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', 'App\Http\Controllers\Api\AuthController@login');
    Route::post('register', 'App\Http\Controllers\Api\AuthController@register');
});

// Rotas do administrador
Route::group(['middleware' => ['api.auth', 'auth:api', 'role.admin'], 'prefix' => 'admin'], function ($router) {
    Route::get('/usuarios', 'App\Http\Controllers\Api\UserController@index');
    Route::get('/agendamentos', 'App\Http\Controllers\Api\AgendaVacinacaoController@agendamentos');
    Route::patch('/agendamento/{id_agendamento}', 'App\Http\Controllers\Api\AgendaVacinacaoController@updateAgendamento');
});
 
// Rotas do usuario
Route::group(['middleware' => ['api.auth', 'auth:api'], 'prefix' => 'usuario'], function ($router) {
    Route::get('/dados', 'App\Http\Controllers\Api\UserController@dados');
    Route::get('/agenda', 'App\Http\Controllers\Api\UsuarioVacinacaoController@agenda');
});

// Rotas públicas
Route::group(['middleware' => 'api', 'prefix' => 'publico'], function ($router) {
    Route::get('/agendas', 'App\Http\Controllers\Api\AgendaVacinacaoController@index');
});