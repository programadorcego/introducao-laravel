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

Route::get("users", "Admin\\UserController@index");
Route::get("user/{id}/show", "Admin\\UserController@show")->name("user");
Route::get("user/create", \Admin\UserCreate::class)->name("user.create");
Route::get("user/edit", \Admin\UserEdit::class)->name("user.edit");