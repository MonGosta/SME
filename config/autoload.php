<?php
function Autoloader($className) {
 $className = str_replace("\\", "/", $className);
 $fileName = $className . '.php';

 $fileName = str_replace('Mongosta/Bootstrap', 'Bootstrap',$fileName);

 $fileName = str_replace('Mongosta/Controller', 'src', $fileName);

 require_once($fileName);
}
spl_autoload_register('Autoloader');