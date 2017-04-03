<?php

namespace Mongosta\Model;



	class UserModel {
	    private $id;
	    private $nombre;
	    private $usuario;
	    private $contrasena;
	    private $email;
	    private $telefono;
	    private $dni;
	    private $id_ciente;

	    public function __construct($nombre="", $usuario="", $contrasena="",
	    							$email="",$telefono="",$dni="",$id_ciente="", $id=null){
	    $this->id = $id;
	    $this->nombre = $nombre;
	    $this->usuario = $usuario;
	    $this->contrasena=$contrasena;
	    $this->email=$email;
	    $this->telefono=$telefono;
	    $this->dni=$dni;
	    $this->id_ciente=$id_ciente;
	 }
      

      public function getId(){
      return $this->id;
    }
      public function setId($id){
       $this->id = $id;
    }

       public function getNombre(){
      return $this->nombre;
    }
      public function setNombre($nombre){
       $this->nombre = $nombre;
    }

         public function getUsuario(){
      return $this->usuario;
    }
      public function setUsuario($usuario){
       $this->usuario = $usuario;
    }

     public function getContrasena(){
      return $this->contrasena;
    }
      public function setContrasena($contrasena){
       $this->contrasena = $contrasena;
    }

       public function getEmail(){
      return $this->email;
    }
      public function setEmail($email){
       $this->email = $email;
    }

       public function getTelefono(){
      return $this->telefono;
    }
      public function setTelefono($telefono){
       $this->telefono = $telefono;
    }

       public function getDni(){
      return $this->dni;
    }
      public function setDni($dni){
       $this->dni = $dni;
    }


       public function getId_ciente(){
      return $this->id_ciente;
    }
      public function setId_ciente($id_ciente){
       $this->id_ciente = $id_ciente;
    }

}