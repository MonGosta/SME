<?php
namespace Mongosta\Bootstrap;
use \PDO;
class Database
{
 private static $instance;

 private function __construct(){}
 private function __clone(){}
 private static function connect()
 {
 	try {
 		$config = require_once(__DIR__.'/../config/config.php');
 		
    	$db = new PDO (
       		"mysql:host={$config['db']['host']};
			dbname={$config['db']['dbname']};
			charset={$config['db']['charset']}",
			$config['db']['user'],
			$config['db']['password']
		);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $db;

 } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
}
 public static function getInstance(){
    if (self::$instance == null) {
      self::$instance = self::connect();
 }
 return self::$instance;
}

}
 