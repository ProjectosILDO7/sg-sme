<?php

use App\Http\Controllers\ApiController\ApiEstrangeirosController;
use App\Http\Controllers\ApiController\ApiTrabalhadorController;
use App\Http\Controllers\ApiController\TrabalhadorControllerApi;
use App\Http\Controllers\PrintDocumentosController;
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

// Trabalhadores
Route::get('/lista', [ApiTrabalhadorController::class, 'index']);
Route::post('/adicionar', [ApiTrabalhadorController::class, 'adicionarTrabalhador']);
Route::get('/editeTrabalhador/{id}', [ApiTrabalhadorController::class, 'formEditTrabalhador'])->name('editarTrabalhador');
Route::put('/updateTrabalhador/{id}', [ApiTrabalhadorController::class, 'updateEditTrabalhador'])->name('updateTrabalhador');
Route::get('/detalhesTrabalhador/{id}', [ApiTrabalhadorController::class, 'detalhesTrabalhador'])->name('detalhesTrabalhador');
Route::get('/apagarTrabalhador/{id}', [ApiTrabalhadorController::class, 'apagarTrabalhador'])->name('apagarTrabalhador');
// Estrangeiros
Route::get('/listaEstrangeiro', [ApiEstrangeirosController::class, 'index']);
Route::post('/adicionarEstrangeiro', [ApiEstrangeirosController::class, 'adicionarEstrangeiro']);
Route::get('/editeEstrangeiro/{id}', [ApiEstrangeirosController::class, 'formEditEstrangeiro'])->name('editarEstrangeiro');
Route::put('/updateEstrangeiro/{id}', [ApiEstrangeirosController::class, 'updateEditEstrangeiros'])->name('updateEstrangeiro');
Route::get('/detalhesEstrangeiro/{id}', [ApiEstrangeirosController::class, 'detalhesEstrangeiro'])->name('detalhesTrabalhador');
Route::get('/apagarEstrangeiro/{id}', [ApiEstrangeirosController::class, 'apagarEstrangeiro'])->name('apagarTrabalhador');
@

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

