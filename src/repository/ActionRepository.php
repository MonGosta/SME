<?php 
namespace Mongosta\Repository;

use \PDO;
use Mongosta\Bootstrap\Database as Db;
use Mongosta\Model\ActionModel as Action;

class ActionRepository{
  
  	static public function getAll(){
  		$db = Db::getInstance();
  	    $actions = $db->query('SELECT * FROM sme_acciones');

  	    foreach ($actions as $req) {
  	    	$nombres[] = new Action($req['nombre'],$req['texto'],$req['modo_foto'],
                             $req['registro_en_accion'],$req['texto_personalizado'],$req['sin_foto'],$req['etiquetado_multiple'],$req['id_evento'],$req['overlay_margin_x'],$req['overlay_margin_y']);
  	    }
  		return $nombres;
      }

    static public function findByNombre($nombre){
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM sme_acciones WHERE nombre= :nombre');
      $req->execute(array(':nombre' => $nombre));
      $req = $req->fetch();

      $action = new Action($req['nombre'],$req['texto'],$req['modo_foto'],
      	              $req['registro_en_accion'],$req['texto_personalizado'],$req['sin_foto'],$req['etiquetado_multiple'],$req['id_evento'],$req['overlay_margin_x'],$req['overlay_margin_y']);
        return $action;
     }

     static public function create($action){

     	  $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO sme_acciones (nombre, texto, modo_foto, registro_en_accion, 
        												  texto_personalizado,sin_foto,etiquetado_multiple,id_evento,overlay_margin_x,overlay_margin_y) 
        	                    VALUES (:nombre, :texto, :modo_foto, :registro_en_accion, :texto_personalizado, :sin_foto, :etiquetado_multiple, :id_evento, :overlay_margin_x, :overlay_margin_y);');
        $req->execute(array(':nombre' => $action->getNombre(),
                             ':texto' => $action->getTexto(),
                              ':modo_foto' => $action->getModo_foto(),
                              ':registro_en_accion' => $action->getRegistro_en_accion(),
                              ':texto_personalizado' =>$action->getTexto_personalizado(),
                              ':sin_foto' => $action->getSin_foto(),
                              ':etiquetado_multiple' => $action->getEtiquetado_multiple(),
                              ':id_evento' => $action->getId_evento(),
                              ':overlay_margin_x' => $action->getOverlay_margin_x(),
                              ':overlay_margin_y' => $action->getOverlay_margin_y()
                           )
                      );


     }

      public static function delete($action){
           $db = Db::getInstance();
           $nombre = $action->getNombre();
           $req = $db->prepare('DELETE FROM sme_acciones WHERE nombre = :nombre');
           $req->execute(array('nombre' => $nombre));
      }


      public static function update($action){
        $db = Db::getInstance();
        $req = $db->prepare('UPDATE sme_acciones SET nombre = :nombre, texto = :texto , 
                             modo_foto = :modo_foto , registro_en_accion = :registro_en_accion , texto_personalizado = :texto_personalizado,sin_foto = :sin_foto , etiquetado_multiple = :etiquetado_multiple , id_evento = :id_evento , overlay_margin_x = :overlay_margin_x , overlay_margin_y = :overlay_margin_y WHERE nombre = :nombre;');
       
        $req->execute(array(':nombre' => $action->getNombre(),
                             ':texto' => $action->getTexto(),
                              ':modo_foto' => $action->getModo_foto(),
                              ':registro_en_accion' => $action->getRegistro_en_accion(),
                              ':texto_personalizado' =>$action->getTexto_personalizado(),
                              ':sin_foto' => $action->getSin_foto(),
                              ':etiquetado_multiple' => $action->getEtiquetado_multiple(),
                              ':id_evento' => $action->getId_evento(),
                              ':overlay_margin_x' => $action->getOverlay_margin_x(),
                              ':overlay_margin_y' => $action->getOverlay_margin_y()
                           )
                      );

      }

   
      
}
