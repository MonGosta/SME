<?php
namespace Mongosta\Controller;

use Mongosta\Repository\ClientRepository as Repo;
use Mongosta\Bootstrap\View ;
use Mongosta\Model\ClientModel as Client;

class ClientController
{
	function index(){
		$nombres = Repo::getAll();
		$view = new View("src/views/client");
		$view->render('index.php', ['nombres' => $nombres]);
	}

	function show(){
		$user = Repo::findByEmail(1);
	}


	function register(){

		if(isset($_POST['nombre'])){
		  $client = new Client ($_POST['nombre'],
								$_POST['email'],
								$_POST['telefono']
								);
		    $client->save(); 	
		}else{
			$client = new Client();
		}
	  	$view = new View("src/views/client");
		$view->render('register.php', ['client' => $client]);


	}

	function delete(){

		if(isset($_POST['email'])){
			$email = $_POST['email'];
			$client = new Client();
			$client  = Repo::findByEmail($email);
			$client->delete();
		}
		$client = new Client();
	    $view = new View("src/views/client");
		$view->render('delete.php', ['client' => $client]);
    }
}
