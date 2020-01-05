<?php

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
});

Route::get('/teste', function(){
    return "Olá! Seja bem vindo!";
});

Route::get('/{nome}', function($nome){
    return "Olá! Seja bem vindo, " . $nome . "!";
});

Route::get('/rotacomregras/{nome}/{n}', function($nome, $n){
    for($i = 0; $i<$n; $i++)
        echo "olá, seja bem vindo, $nome! <br>";
})->where('nome','[A-Za-z]+')->where('n','[0-9]+'); //regras para rota