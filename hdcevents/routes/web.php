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

// preciso indicar que estou usando aquela action index do controller EventController
// 1° preciso importar o controller

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']); 
Route::get('/events/create', [EventController::class, 'create']);
Route::get("/contact", [EventController::class, 'contatos']);
Route::get("/produtos", [EventController::class, 'produtos']);























/*

// parametro obrigatório
Route::get("/produtos_param/{id}", function($id){
    return view('produto_param', ['id' => $id]);
});

// parametro opcional
Route::get("/produtos_param_opc/{id?}", function($id = null){
    return view('produto_param', ['id' => $id]);
});

// query parameters
Route::get('/produtos_param_query', function(){

    $busca = request('busca');
    $sobrenome = request('sobrenome');

    return view('return_param', ["busca" => $busca,
                                 "sobrenome" => $sobrenome]);
});

*/