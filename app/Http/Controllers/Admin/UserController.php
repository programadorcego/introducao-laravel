<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
	{
		$this->users = [
			1 => ["Willian", "willian@meuemail.com.br"],
			2 => ["José", "jose@meuemail.com.br"],
			3 => ["Joaquim", "joaquim@meuemail.com.br"],
		];
	}
	
	public function index()
	{
		/*echo "<h1>Uusuários</h1>";
		
		foreach($this->users as $id => $user)
		{
			echo '<p><a href="'.route("user", ['id' => $id]).'">'.$user[0].'</a> | '.$user[1].'</p>';
		}*/
		
		$title = "Usuários";
		return view("admin.users.index", compact("title"));
	}
	
	public function show(int $id)
	{
		/*echo "<h1>Usuário</h1>";
		
		echo "<p>{$this->users[$id][0]} | {$this->users[$id][1]}</p>";*/
		
		$user = $this->users[$id];
		return view('admin.users.show')->with("user", $user);
	}
}
