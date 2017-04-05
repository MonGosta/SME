<?php 
namespace Mongosta\Repository;
use \PDO;
use Mongosta\Bootstrap\Database as db;
use Mongosta\Model\EventModel as Event;




class EventRepository{

	
static public function getAll(){
  		$db = Db::getInstance();
  	    $req = $db->query('SELECT * FROM sme_eventos');

  	    foreach ($req as $event) {
  	    	// falta crearlo bien
  	    	$eventos[] = new Event($event['ID'],$event['nombre'],$event['nombre_sms'],$event['imagen'],$event['lugar'],$event['fecha'],$event['mostrar_comprobar_pulsera'],$event['registro_previo'],$event['registro_email'],$event['registro_telefono'],$event['id_cliente'],$event['id_lugar_fb'],$event['facebook_pagina'],$event['url']);
  	    }
  		return $eventos;
      }


  static public function findByNombre_sms($nombre_sms){
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM sme_eventos WHERE nombre_sms= :nombre_sms');
      $req->execute(array(':nombre_sms' => $nombre_sms));
      $req = $req->fetch();  
      $event = new Event($req['ID'],$req['nombre'],$req['nombre_sms'],$req['imagen'],$req['lugar'],$req['fecha'],$req['mostrar_comprobar_pulsera'],$req['registro_previo'],$req['registro_email'],$req['registro_telefono'],$req['id_cliente'],$req['id_lugar_fb'],$req['facebook_pagina'],$req['url']);
        return $event;
     }


     static public function create($event){
     	  $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO sme_eventos ( nombre, nombre_sms, imagen, lugar,fecha,mostrar_comprobar_pulsera,registro_previo,registro_email,registro_telefono,id_cliente,id_lugar_fb,facebook_pagina,url) 
        	                    VALUES (:nombre, :nombre_sms, :imagen, :lugar,:fecha,
                              :mostrar_comprobar_pulsera,:registro_previo,:registro_email,
                              :registro_telefono,:id_cliente,:id_lugar_fb,:facebook_pagina,:url);');
        $req->execute(array(':nombre' => $event->getNombre(),
                             ':nombre_sms' => $event->getNombre_sms(),
                              ':imagen' => $event->getImagen(),
                              ':lugar' => $event->getLugar(),
                              ':fecha' => $event->getFecha(),
                              ':mostrar_comprobar_pulsera' => $event->getMostrar_comprobar_pulsera(),
                              ':registro_previo' => $event->getRegistro_previo(),
                              ':registro_email' => $event->getRegistro_email(),
                              ':registro_telefono' => $event->getRegistro_telefono(),
                              ':id_cliente' => $event->getId_cliente(),
                              ':id_lugar_fb' => $event->getId_lugar_fb(),
                              ':facebook_pagina' => $event->getFacebook_pagina(),
                              ':url' => $event->getUrl()
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
        // falta preparlo
        $req = $db->prepare('UPDATE sme_eventos SET nombre = :nombre, nombre_sms = :nombre_sms , 
                             imagen = :imagen , lugar = :lugar , fecha = :fecha, 
                             mostrar_comprobar_pulsera = :mostrar_comprobar_pulsera, registro_previo=:registro_previo,registro_email=:registro_email,registro_telefono=:registro_telefono,id_cliente=:id_cliente,id_lugar_fb=:id_lugar_fb,facebook_pagina=:facebook_pagina,url=:url  WHERE nombre_sms= :nombre_sms;');
       // falta hacerlo bien
         $req->execute(array(':nombre' => $event->getNombre(),
                             ':nombre_sms' => $event->getNombre_sms(),
                              ':imagen' => $event->getImagen(),
                              ':lugar' => $event->getLugar(),
                              ':fecha' => $event->getFecha(),
                              ':mostrar_comprobar_pulsera' => $event->getMostrar_comprobar_pulsera(),
                              ':registro_previo' => $event->getRegistro_previo(),
                              ':registro_email' => $event->getRegistro_email(),
                              ':registro_telefono' => $event->getRegistro_telefono(),
                              ':id_cliente' => $event->getId_cliente(),
                              ':id_lugar_fb' => $event->getId_lugar_fb(),
                              ':facebook_pagina' => $event->getFacebook_pagina(),
                              ':url' => $event->getUrl()
                           )
                      );

      }
}


?>