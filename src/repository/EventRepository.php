<?php 
namespace Mongosta\Repository;
use \PDO;
use Mongosta\Bootstrap\Database as db;
use Mongosta\EventModel\EventModel as em;




class EventRepository{

	
static public function getAll(){
  		$db = Db::getInstance();
  	    $req = $db->query('SELECT * FROM sme_eventos');

  	    foreach ($req as $event) {
  	    	// falta crearlo bien
  	    	$eventos[] = new User($event['nombre'],$event);
  	    }
  		return $nombres;
      }


  static public function findByNombre_sms($email){
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM sme_eventos WHERE nombre_sms= :nombre_sms');
      $req->execute(array(':nombre_sms' => $nombre_sms));
      $req = $req->fetch();

      $event = new Event($req['nombre'],$req['usuario'],$req['contrasena'],
      	              $req['email'],$req['telefono'],$req['dni']);
        return $event;
     }


     static public function create($event){

     	  $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO sme_eventos ( nombre, usuario, contrasena, email, 
        												  telefono,dni) 
        	                    VALUES (:nombre, :usuario, :contrasena, :email, :telefono, :dni);');
        $req->execute(array(':nombre' => $event->getNombre(),
                             ':usuario' => $event->getUsuario(),
                              ':contrasena' => $event->getContrasena(),
                              ':email' => $event->getEmail(),
                              ':telefono' => $event->getTelefono(),
                              ':dni' => $event->getDni()
                           )
                      );
     }

      public static function delete($event){
           $db = Db::getInstance();
           $nombre_sms = $event->getNombre_sms();
           $req = $db->prepare('DELETE FROM sme_eventos WHERE nombre_sms = :nombre_sms');
           $req->execute(array('nombre_sms' => $nombre_sms));
      }

      public function update($event){
        $db = Db::getInstance();
        $req = $db->prepare('UPDATE sme_eventos SET nombre = :nombre, usuario = :usuario , 
                             contrasena = :contrasena , email = :email , telefono = :telefono , 
                             dni = :dni   WHERE nombre_sms= :nombre_sms;');
       // falta hacerlo bien
        $req->execute(array(':id' => $user->getId(),
                            ':nombre' => $user->getNombre(),
                            ':usuario' => $user->getUsuario(),
                            ':contrasena' => $user->getContrasena(),
                            ':email' => $user->getEmail(),
                            ':telefono' => $user->getTelefono(),
                            ':dni' => $user->getDni()                            
                            )
                      );

      }

        



}


?>