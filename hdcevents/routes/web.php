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

Route::get('/', function () {
    $nome = "Helberte";
    $idade = 24;
    $profissao = "Programador";
    $estadoCivil = "Solteiro";

    return view('welcome', ["nome" => $nome,
                            "idade" => $idade,
                            "profissao" => $profissao,
                            "estadoCivil" => $estadoCivil]);
                            
    // passando dados para o template engine
    // para o html através da rota, usa-se um array nomeado

    // para imprimir esta variável lá no html usamos dois parenteses e o nome da variável

    // {{ $nome }}
}); 

Route::get("/contact", function(){
    return view('contact');
});

Route::get("/produtos", function(){
    return view('products');
});