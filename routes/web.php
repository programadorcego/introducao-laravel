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

Route::prefix("admin")->namespace("Admin\\")->group(function(){
	Route::get("users", "UserController@index");
	Route::get("user/{id}/show", "UserController@show")->name("user");
	Route::get("user/create", \UserCreate::class)->name("user.create");
	Route::get("user/edit", \UserEdit::class)->name("user.edit");
});