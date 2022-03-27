<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principalController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\appController;
use App\Http\Controllers\testeController;
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

//Route::get('/', [\App\Http\Controller\principalContrroller::class, 'principal']);

Route::get('/', [principalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [principalController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [contatoController::class, 'principal'])->name('site.contato');
Route::post('/contato', [contatoController::class, 'principal'])->name('site.contato');

Route::get('/login', [loginController::class, 'principal'])->name('site.login');

Route::prefix('/app')->group(function (){
    Route::get('/clientes', [appController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [appController::class, 'fornecedor'])->name('app.fornecedor');
    Route::get('/produtos', [appController::class, 'produtos'])->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [testeController::class, 'teste'])->name('teste');

Route::fallback(function(){
    echo 'rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir ao inicio da paginda';
});