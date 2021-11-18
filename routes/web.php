<?php

use App\Http\Controllers\BancoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\InvitadoController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\MesaController;
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
})->name('raiz');

Route::get('/invitacion', function () {
    return view('vista_invitacion');
})->name('invitacion_prueba');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [EventoController::class,'index']
)->name('dashboard');

Route::post('unir', [EventoController::class,'unir'])->name('unir_evento');

Route::post('store', [MesaController::class,'store'])->name('store_mesa');

Route::resource('evento', EventoController::class)->middleware('auth');

Route::resource('lugar', LugarController::class,['only' => ['update']])->middleware('auth');

Route::resource('mesa', MesaController::class, ['only' => ['destroy']])->middleware('auth');

Route::resource('banco', BancoController::class,['only' => ['update']])->middleware('auth');

Route::resource('foto', FotoController::class, ['only' => ['store','destroy']])->middleware('auth');

Route::resource('invitado', InvitadoController::class, ['except' => ['index']])->middleware('auth');

Route::get('/invitado/{evento}/index', [InvitadoController::class,'index'])->middleware('auth')->name('index_invitados');

Route::get('/evento/{evento}/invitado/{invitado}', [EventoController::class,'invitacion'])->name('invitacion');
