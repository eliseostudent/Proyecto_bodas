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

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/dashboard',
    [EventoController::class, 'index']
)->name('dashboard');

Route::post('unir', [EventoController::class, 'unir'])->middleware('auth')->name('unir_evento');

Route::post('store', [MesaController::class, 'store'])->middleware('auth')->name('store_mesa');

Route::patch('confirm/{invitado}', [InvitadoController::class, 'confirm'])->name('confirm');

Route::resource('evento', EventoController::class)->middleware('auth');

Route::resource('lugar', LugarController::class, ['only' => ['update']])->middleware('auth');

Route::resource('mesa', MesaController::class, ['only' => ['destroy']])->middleware('auth');

Route::resource('banco', BancoController::class, ['only' => ['update']])->middleware('auth');

Route::resource('foto', FotoController::class, ['only' => ['store', 'destroy']])->middleware('auth');

Route::resource('invitado', InvitadoController::class, ['except' => ['index']])->middleware('auth');

Route::get('/invitados/{evento}/index', [InvitadoController::class, 'index'])->middleware('auth')->name('index_invitados');

Route::get('/evento/{evento}/invitado/{invitado}', [EventoController::class, 'invitacion'])->name('invitacion');

Route::get('/inv/{hash}', [EventoController::class, 'invitacion_hash'])->name('invitacion_hash');

Route::get('/evento/{evento}/envioinvitacion/{invitado}', [InvitadoController::class, 'enviarInvitacion'])->middleware('auth')->name('enviar_invitacion');

Route::get('evento/{evento}/export/', [EventoController::class, 'exportar'])->middleware('auth')->name('exportar_invitados');

Route::get('evento/{evento}/enviarInvitacionesRestantes/', [EventoController::class, 'enviarInvitacionesRestantes'])->middleware('auth')->name('enviar_invitaciones');
