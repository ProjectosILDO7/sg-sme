<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CidadaoEstrangeiroController;
use App\Http\Controllers\PaginasIniciaisController;
use App\Http\Controllers\PrintDocumentosController;
use App\Http\Controllers\TrabalhadorController;
use App\Http\Controllers\UserConfigController;
use App\Mail\MensagemEmail;
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
    return redirect()->route('login');//view('welcome');
});

Route::get('/sobre', [PaginasIniciaisController::class, 'paginaSobre'])->name('pg.sobre');
Route::get('/contacto', [PaginasIniciaisController::class, 'paginaContacto'])->name('pg.contacto');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('/trabalhadores', TrabalhadorController::class);
Route::resource('/estrangeiros', CidadaoEstrangeiroController::class);

//email
Route::get('/mensagemEmail', function(){
    return new MensagemEmail();
});

// print
route::get('/printDoc', [PrintDocumentosController::class, 'index'])->name('print');
route::get('/printDocTrabResidente', [PrintDocumentosController::class, 'pdfResidente']);
route::get('/printDocTrabNaoResidente', [PrintDocumentosController::class, 'pdfNaoResidente']);
route::get('/vistoPrevilegiado', [PrintDocumentosController::class, 'pdfVistoPrevilegiado']);
route::get('/vistoNaoPrevilegiado', [PrintDocumentosController::class, 'pdfVistoNaoPrevilegiado']);
//excel
route::get('/listaTrabalhadoresExcel', [PrintDocumentosController::class, 'excelExportTrabalhadorResidente']);
route::get('/listaTrabalhadoresNaoResidenteExcel', [PrintDocumentosController::class, 'excelExportTrabalhadorNaoResidente']);
route::get('/listaVistoPrevilegiadoExcel', [PrintDocumentosController::class, 'excelExportVistoPrevilegiado']);
route::get('/listaVistoNaoPrevilegiadoExcel', [PrintDocumentosController::class, 'excelExportNaoPrevilegiado']);

Route::get('/configUser/{id}', [UserConfigController::class, 'formConfigUser'])->name('userConfig')->middleware('auth');
Route::put('/configUser/{id}', [UserConfigController::class, 'editUser'])->name('EditUserConfig')->middleware('auth');


