<?php

namespace Mongosta\Model;
    
class ClientModel {
  private $id;
  private $nombre;
  private $email;
  private $telefono;

  public function __construct($id=null, $nombre="", $email="", $telefono=""){
    $this->id = $id;
    $this->nombre = $nombre;
    $this->email = $email;
    $this->telefono = $telefono;
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

}