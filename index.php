<?php
require 'vendor/autoload.php'; // Comprueba la ruta
use Mongosta\Bootstrap\Request;

$request = new Request();
// obtenemos el parámetro o asignamos un valor por defecto
if ($request->getParam('controller') != NULL) {
    $controller = $request->getParam('controller');
} else {
    $controller = 'User';
}
// construimos el nombre completo del controlador
$controller = ucfirst($controller) . 'Controller';
$controller = 'Mongosta\\Controller\\' . $controller;
// obtenemos el parámetro o asignamos un valor por defecto

if ($request->getParam('action') != NULL) {
    $action = $request->getParam('action');
} else {
    $action = 'index';
}
// intanciamos el controlador
$controller = new $controller;
// y llamamos a la "acción"/método pasando el id si lo hay
$controller->$action($request->getParam('id'));


?>
