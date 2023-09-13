<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
	{
		echo "<h1>Usuário</h1>";
		echo $id;
	}
}
