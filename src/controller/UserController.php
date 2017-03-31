<?php
namespace Mongosta\Controller;

use Mongosta\Repository\UserRepository as Repo;
use Mongosta\Bootstrap\View ;

class UserController
{
	function index(){
		$nombres = Repo::getAll();
		$view = new View("src/views/user");
		$view->render('index.php', ['nombres' => $nombres]);
	}

	function show(){
		$user = Repo::findById(1);
		var_dump($user);
	}
}