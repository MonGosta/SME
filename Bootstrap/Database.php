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
 	
       $db = new PDO ('mysql:host=localhost;dbname=casfid', "root", "");
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
 