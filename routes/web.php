<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ClienteController::class,'showhome']);
Route::get('/cadastro-cliente',[ClienteController::class,'showFormularioCadastro']);
Route::get('/formulario-funcionario',[FuncionarioController::class,'formulariofuncionario']);