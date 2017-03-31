<?php 
namespace Mongosta\Repository;

use \PDO;
use Mongosta\Bootstrap\Database as db;

class UserRepository{
	public function getAll(){
		$nombres = array(
			"jordi",
			"josele",
			"lorenso",
			"jorge"		
		);
		return $nombres;
    }
}
