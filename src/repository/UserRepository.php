<?php 
namespace Mongosta\Repository;

use \PDO;
use Mongosta\Bootstrap\Database as db;
use Mongosta\Model\UserModel as um;

class UserRepository{


	static public function getAll(){
		$db = Db::getInstance();
	    $req = $db->query('SELECT * FROM sme_usuarios');

	    foreach ($req as $usuario) {
	    	$nombres[] = new um($usuario['nombre'],$usuario['usuario'],$usuario['contrasena'],
	    		              $usuario['email'],$usuario['telefono'],$usuario['dni'],
	    		              $usuario['id_cliente']);
	    }
	    //$nombres = $req;
		return $nombres;
    }

  static public function findById($id){
        $users = self::getAll();
   	    return $users[$id];
   }
    
}
