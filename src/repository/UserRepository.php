<?php 
namespace Mongosta\Repository;

use \PDO;
use Mongosta\Bootstrap\Database as db;

class UserRepository{
	static public function getAll(){
		$nombres = array(
			["id"=>"1","nombre"=>"jordi"],
			["id"=>"2","nombre"=>"josele"],
			["id"=>"3","nombre"=>"pau"],
			["id"=>"4","nombre"=>"jorge"],		
			["id"=>"5","nombre"=>"lorenso"]	
		);
		return $nombres;
    }

  static public function findById($id){
        $users = self::getAll();
   	    return $users[$id];
   }
    
}
