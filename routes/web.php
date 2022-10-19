<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CidadaoEstrangeiroController;
use App\Http\Controllers\PaginasIniciaisController;
use App\Http\Controllers\TrabalhadorController;
use App\Http\Controllers\UserConfigController;
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

Route::get('/configUser/{id}', [UserConfigController::class, 'formConfigUser'])->name('userConfig')->middleware('auth');
Route::put('/configUser/{id}', [UserConfigController::class, 'editUser'])->name('EditUserConfig')->middleware('auth');


