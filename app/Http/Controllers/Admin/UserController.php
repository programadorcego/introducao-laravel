<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
		//$users = $this->users;
		//$users = [];
		
		$users = DB::select("SELECT id, name, email FROM users");
		return view("admin.users.index", compact("title", "users"));
	}
	
	public function show(int $id)
	{
		/*echo "<h1>Usuário</h1>";
		
		echo "<p>{$this->users[$id][0]} | {$this->users[$id][1]}</p>";*/
		
		$title = "Usuário";
		//$user = $this->users[$id];
		$user = DB::select("SELECT id, name, email FROM users WHERE id = ?", [$id]);
		return view('admin.users.show', compact("title", "user"));
	}
}
