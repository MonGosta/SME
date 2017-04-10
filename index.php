<?php
require 'vendor/autoload.php'; // Comprueba la ruta
use Mongosta\Bootstrap\Request;
use Mongosta\Bootstrap\Config;
use Mongosta\Bootstrap\Database;
use Mongosta\Controller\UserController;
use Mongosta\Controller\ClientController;
use Mongosta\Controller\EventController;
use Mongosta\Controller\ActionController;


$request = new Request();
// obtenemos el parámetro o asignamos un valor por defecto
if($request->hasParam('controller') != NULL){
	$controller = $request->getParam('controller');
}else{
	$controller = 'User';
}
// construimos el nombre completo del controlador
$controller = ucfirst($controller) . 'Controller';
$controller = 'Mongosta\\Controller\\'. $controller;
// obtenemos el parámetro o asignamos un valor por defecto

if($request->hasParam('action')!=NULL){
	$action = $request->getParam('action');
}else{
	$action = 'index';
}
// intanciamos el controlador
$controller = new $controller;
// y llamamos a la "acción"/método pasando el id si lo hay
if($request->hasParam('id')){
	$controller->$action($request->getParam('id'));
}else{
	$controller->$action();
}







?>
