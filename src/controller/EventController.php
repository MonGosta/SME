<?php
namespace Mongosta\Controller;

use Mongosta\Repository\EventRepository as Repo;
use Mongosta\Bootstrap\View ;
use Mongosta\Model\EventModel as Event;

class EventController
{
	function index(){
		$nombres = Repo::getAll();
		$view = new View("src/views/event");
		$view->render('index.php', ['events' => $nombres]);
	}



	function register(){

		if(isset($_POST['nombre_sms'])){
		  $event = new Event ($_POST['nombre'],
								$_POST['nombre_sms'],
								$_POST['imagen'],
								$_POST['lugar'],
								$_POST['fecha'],
								$_POST['mostrar_comprobar_pulsera'],
								$_POST['registro_previo'],
								$_POST['registro_email'],
								$_POST['registro_telefono']
								/*$_POST['id_cliente'],
								$_POST['id_lugar_fb'],
								$_POST['facebook_pagina'],
								$_POST['url']*/
								);
		  
		    $event->save(); 	
		}else{
			$event= new Event();
		}
	  	$view = new View("src/views/event");
		$view->render('register.php', ['event' => $event]);


	}

	function delete(){

		if(isset($_POST['nombre_sms'])){
			$nombre_sms = $_POST['nombre_sms'];
			$event = new Event();
			$event = Repo::findByNombre_sms($nombre_sms);
			$event ->delete();
		}
		$event  = new Event();
	    $view = new View("src/views/event");
		$view->render('delete.php', ['event' => $event]);
    }
}