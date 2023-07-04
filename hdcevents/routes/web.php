<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']); 
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get("/contact", [EventController::class, 'contatos']);
Route::get('/events/{id}',[EventController::class, 'show']);
Route::get("/produtos", [EventController::class, 'produtos']);

Route::post('/events', [EventController::class, "store"]);
// action store comumente utilizado para enviar os dados para o 
// banco de dados

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
