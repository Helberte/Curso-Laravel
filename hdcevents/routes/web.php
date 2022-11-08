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

    $contacts = ["Helberte",
                "Nicareli",
                "Gabriela",
                "Everdin",
                "Fulano",
                "Beltrano",
                "Sicrano",
                "Dizimano",
                "Noventano",
                "Almerano"];

    return view('contact', ["contatos" => $contacts]);
});

Route::get("/produtos", function(){
    return view('products');
});

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