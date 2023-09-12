<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("hello", function(){
	return "Olá, mundo!";
});

Route::get("contato", function(){
	return "<h1>Contato</h1>";
});


Route::get("greeting/{name}/{lastname?}", function(string $name, string $lastname = null){
	return "Olá, meu nome é {$name} {$lastname}";
});