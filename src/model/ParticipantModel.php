<?php

namespace Mongosta\Model;

use Mongosta\Repository\ParticipantRepository as ParticipantRepo;

class ParticipantModel
{

    private $id;
    private $hash_vinculacion;
    private $nombre;
    private $apellidos;
    private $email;
    private $telefono;
    private $numero_amigos;
    private $amigos;
    private $permisos;
    private $imagen;
    private $enlace;
    private $local;
    private $zona_horaria;
    private $genero;
    private $facebook_id;
    private $facebook_token;
    private $accesos;
    private $ultima_actualizacion;
    private $id_evento;

    public function __construct($hash_vinculacion = "", $nombre = "", $apellidos = "", $email = "", $telefono = "", $numero_amigos = "", $amigos = "", $permisos = "", $imagen = "", $enlace = "", $local = "", $zona_horaria = "", $genero = "", $facebook_id = "", $facebook_token = "", $accesos = "", $ultima_actualizacion = "", $id_evento = "", $id = null)
    {

        $this->id = $id;
        $this->hash_vinculacion = $hash_vinculacion;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->numero_amigos = $numero_amigos;
        $this->amigos = $amigos;
        $this->permisos = $permisos;
        $this->imagen = $imagen;
        $this->permisos = $permisos;
        $this->enlace = $enlace;
        $this->local = $local;
        $this->zona_horaria = $zona_horaria;
        $this->genero = $genero;
        $this->facebook_id = $facebook_id;
        $this->facebook_token = $facebook_token;
        $this->accesos = $accesos;
        $this->ultima_actualizacion = $ultima_actualizacion;
        $this->id_evento = $id_evento;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getHash_vinculacion()
    {
        return $this->hash_vinculacion;
    }

    public function setHash_vinculacion($hash_vinculacion)
    {
        $this->hash_vinculacion = $hash_vinculacion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getNumero_amigos()
    {
        return $this->numero_amigos;
    }

    public function setNumero_amigos($numero_amigos)
    {
        $this->numero_amigos = $numero_amigos;
    }

    public function getAmigos()
    {
        return $this->amigos;
    }

    public function setAmigos($amigos)
    {
        $this->amigos = $amigos;
    }

    public function getPermisos()
    {
        return $this->permisos;
    }

    public function setPermisos($permisos)
    {
        $this->permisos = $permisos;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getEnlace()
    {
        return $this->enlace;
    }

    public function setEnlace($enlace)
    {
        $this->enlace = $enlace;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal($local)
    {
        $this->local = $local;
    }

    public function getZona_horaria()
    {
        return $this->zona_horaria;
    }

    public function setZona_horaria($zona_horaria)
    {
        $this->zona_horaria = $zona_horaria;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function getFacebook_id()
    {
        return $this->facebook_id;
    }

    public function setFacebook_id($facebook_id)
    {
        $this->facebook_id = $facebook_id;
    }

    public function getFacebook_token()
    {
        return $this->facebook_token;
    }

    public function setFacebook_token($facebook_token)
    {
        $this->facebook_token = $facebook_token;
    }

    public function getAccesos()
    {
        return $this->accesos;
    }

    public function setAccesos($accesos)
    {
        $this->accesos = $accesos;
    }

    public function getUltima_actualizacion()
    {
        return $this->ultima_actualizacion;
    }

    public function setUltima_actualizacion($ultima_actualizacion)
    {
        $this->ultima_actualizacion = $ultima_actualizacion;
    }

    public function getId_evento()
    {
        return $this->id_evento;
    }

    public function setId_evento($id_evento)
    {
        $this->id_evento = $id_evento;
    }


}