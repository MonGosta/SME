<?php

namespace Mongosta\Model;

use Mongosta\Repository\EventRepository as EventRepo;

class EventModel
{
    private $id;
    private $nombre;
    private $nombre_sms;
    private $imagen;
    private $lugar;
    private $fecha;
    private $mostrar_comprobar_pulsera;
    private $registro_previo;
    private $registro_email;
    private $registro_telefono;
    private $id_cliente;
    private $id_lugar_fb;
    private $facebook_pagina;
    private $url;

    public function __construct($id = null, $nombre = "", $nombre_sms = "", $imagen = "", $lugar = "", $fecha = "", $mostrar_comprobar_pulsera = "", $registro_previo = "", $registro_email = "", $registro_telefono = "", $id_cliente = "", $id_lugar_fb = "", $facebook_pagina = "", $url = "")

    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nombre_sms = $nombre_sms;
        $this->imagen = $imagen;
        $this->lugar = $lugar;
        $this->fecha = $fecha;
        $this->mostrar_comprobar_pulsera = $mostrar_comprobar_pulsera;
        $this->registro_previo = $registro_previo;
        $this->registro_email = $registro_email;
        $this->registro_telefono = $registro_telefono;
        $this->id_cliente = $id_cliente;
        $this->id_lugar_fb = $id_lugar_fb;
        $this->facebook_pagina = $facebook_pagina;
        $this->url = $url;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre_sms()
    {
        return $this->nombre_sms;
    }

    public function setNombre_sms($nombre_sms)
    {
        $this->nombre_sms = $nombre_sms;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getMostrar_comprobar_pulsera()
    {
        return $this->mostrar_comprobar_pulsera;
    }

    public function setMostrar_comprobar_pulsera($mostrar_comprobar_pulsera)
    {
        $this->mostrar_comprobar_pulsera = $mostrar_comprobar_pulsera;
    }

    public function getRegistro_previo()
    {
        return $this->registro_previo;
    }

    public function setRegistro_previo($registro_previo)
    {
        $this->registro_previo = $registro_previo;
    }

    public function getRegistro_email()
    {
        return $this->registro_email;
    }

    public function setRegistro_email($registro_email)
    {
        $this->registro_email = $registro_email;
    }

    public function getRegistro_telefono()
    {
        return $this->registro_telefono;
    }

    public function setRegistro_telefono($registro_telefono)
    {
        $this->registro_telefono = $registro_telefono;
    }

    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    public function getId_lugar_fb()
    {
        return $this->id_lugar_fb;
    }

    public function setId_lugar_fb($id_lugar_fb)
    {
        $this->id_lugar_fb = $id_lugar_fb;
    }

    public function getFacebook_pagina()
    {
        return $this->facebook_pagina;
    }

    public function setFacebook_pagina($facebook_pagina)
    {
        $this->facebook_pagina = $facebook_pagina;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function save()
    {
        if ($this->isValid($this->getNombre_sms())) {
            // comporbaciones si hacen falta
            EventRepo::create($this);
        } else {
            EventRepo::update($this);
        }
    }

    private function isValid($nombre_sms)
    {
        if (EventRepo::findByNombre_sms($nombre_sms)->getNombre_sms() != NULL) {
            return false;
        } else {
            return true;
        }
    }

    public function delete()
    {
        //comprobaciones
        //var_dump($this);
        EventRepo::delete($this);
    }

}