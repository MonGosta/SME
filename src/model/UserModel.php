<?php

namespace Mongosta\Model;

use Mongosta\Repository\UserRepository as UserRepo;


class UserModel
{
    private $id;
    private $nombre;
    private $usuario;
    private $contrasena;
    private $email;
    private $telefono;
    private $dni;
    private $id_ciente;

    public function __construct($nombre = "", $usuario = "", $contrasena = "",
                                $email = "", $telefono = "", $dni = "", $id_ciente = "", $id = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->dni = $dni;
        $this->id_ciente = $id_ciente;
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

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
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

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }


    public function getId_ciente()
    {
        return $this->id_ciente;
    }

    public function setId_ciente($id_ciente)
    {
        $this->id_ciente = $id_ciente;
    }

    public function save()
    {
        if ($this->isValid($this->getEmail())) {
            // comporbaciones si hacen falta
            UserRepo::create($this);
        } else {
            UserRepo::update($this);
        }
    }

    public function delete()
    {
        //comprobaciones
        //var_dump($this);
        UserRepo::delete($this);
    }

    private function isValid($email)
    {
        $hola = UserRepo::findByEmail($email)->getEmail();
        var_dump($hola);
        if (UserRepo::findByEmail($email)->getEmail() != NULL) {
            return false;
        } else {
            return true;


        }
    }
}
