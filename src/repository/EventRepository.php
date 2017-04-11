<?php

namespace Mongosta\Repository;

use Mongosta\Bootstrap\Database as db;
use Mongosta\Model\EventModel as Event;


class EventRepository
{


    static public function getAll()
    {
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM sme_eventos');

        foreach ($req as $action) {
            // falta crearlo bien
            $actions[] = new Event( $action['nombre'], $action['nombre_sms'], $action['imagen'], $action['lugar'], $action['fecha'], $action['mostrar_comprobar_pulsera'], $action['registro_previo'], $action['registro_email'], $action['registro_telefono'], $action['id_cliente'], $action['id_lugar_fb'], $action['facebook_pagina'], $action['url'],$action['ID']);
        }
        return $actions;
    }


    static public function findByNombre_sms($nombre_sms)
    {
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM sme_eventos WHERE nombre_sms= :nombre_sms');
        $req->execute(array(':nombre_sms' => $nombre_sms));
        $req = $req->fetch();
        $action = new Event( $req['nombre'], $req['nombre_sms'], $req['imagen'], $req['lugar'], $req['fecha'], $req['mostrar_comprobar_pulsera'], $req['registro_previo'], $req['registro_email'], $req['registro_telefono'], $req['id_cliente'], $req['id_lugar_fb'], $req['facebook_pagina'], $req['url'],$req['ID']);
        return $action;
    }

       static public function findById_cliente($id_cliente){
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM sme_eventos WHERE id_cliente= :id_cliente');
      $req->execute(array(':id_cliente' => $id_cliente));
      $req = $req->fetchAll();  
      foreach ($req as $event) {
          $events[] = new Event($event['nombre'],$event['nombre_sms'],$event['imagen'],$event['lugar'],$event['fecha'],$event['mostrar_comprobar_pulsera'],$event['registro_previo'],$event['registro_email'],$event['registro_telefono'],$event['id_cliente'],$event['id_lugar_fb'],$event['facebook_pagina'],$event['url'],$event['ID']);
      }
      
        return $events;
     }





    static public function create($action)
    {
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO sme_eventos ( nombre, nombre_sms, imagen, lugar,fecha,mostrar_comprobar_pulsera,registro_previo,registro_email,registro_telefono,id_cliente,id_lugar_fb,facebook_pagina,url) 
        	                    VALUES (:nombre, :nombre_sms, :imagen, :lugar,:fecha,
                              :mostrar_comprobar_pulsera,:registro_previo,:registro_email,
                              :registro_telefono,:id_cliente,:id_lugar_fb,:facebook_pagina,:url);');
        $req->execute(array(':nombre' => $action->getNombre(),
                ':nombre_sms' => $action->getNombre_sms(),
                ':imagen' => $action->getImagen(),
                ':lugar' => $action->getLugar(),
                ':fecha' => $action->getFecha(),
                ':mostrar_comprobar_pulsera' => $action->getMostrar_comprobar_pulsera(),
                ':registro_previo' => $action->getRegistro_previo(),
                ':registro_email' => $action->getRegistro_email(),
                ':registro_telefono' => $action->getRegistro_telefono(),
                ':id_cliente' => $action->getId_cliente(),
                ':id_lugar_fb' => $action->getId_lugar_fb(),
                ':facebook_pagina' => $action->getFacebook_pagina(),
                ':url' => $action->getUrl()
            )
        );
    }

    public static function delete($action)
    {
        $db = Db::getInstance();
        $nombre_sms = $action->getNombre_sms();
        $req = $db->prepare('DELETE FROM sme_eventos WHERE nombre_sms = :nombre_sms');
        $req->execute(array('nombre_sms' => $nombre_sms));
    }

    public static function update($action)
    {
        $db = Db::getInstance();
        // falta preparlo
        $req = $db->prepare('UPDATE sme_eventos SET nombre = :nombre, nombre_sms = :nombre_sms , 
                             imagen = :imagen , lugar = :lugar , fecha = :fecha, 
                             mostrar_comprobar_pulsera = :mostrar_comprobar_pulsera, registro_previo=:registro_previo,registro_email=:registro_email,registro_telefono=:registro_telefono,id_cliente=:id_cliente,id_lugar_fb=:id_lugar_fb,facebook_pagina=:facebook_pagina,url=:url  WHERE nombre_sms= :nombre_sms;');
        $req->execute(array(':nombre' => $action->getNombre(),
                ':nombre_sms' => $action->getNombre_sms(),
                ':imagen' => $action->getImagen(),
                ':lugar' => $action->getLugar(),
                ':fecha' => $action->getFecha(),
                ':mostrar_comprobar_pulsera' => $action->getMostrar_comprobar_pulsera(),
                ':registro_previo' => $action->getRegistro_previo(),
                ':registro_email' => $action->getRegistro_email(),
                ':registro_telefono' => $action->getRegistro_telefono(),
                ':id_cliente' => $action->getId_cliente(),
                ':id_lugar_fb' => $action->getId_lugar_fb(),
                ':facebook_pagina' => $action->getFacebook_pagina(),
                ':url' => $action->getUrl()
            )
        );

    }
}


?>