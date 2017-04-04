<?php

namespace Mongosta\Model;

use Mongosta\Repository\ClientRepository as ClientRepo;
    
class ClientModel {
  private $id;
  private $nombre;
  private $email;
  private $telefono;

  public function __construct($nombre="", $email="", $telefono="",$id=null){
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

   public function save(){
        if($this->isValid($this->getEmail())){
          // comporbaciones si hacen falta
          ClientRepo::create($this);
        }else{
           ClientRepo::update($this);
        }
    }
    public function delete(){
      //comprobaciones
     ClientRepo::delete($this);
    }
    private function isValid($email){
        if(ClientRepo::findByEmail($email)->getEmail()!= NULL){
          return false;        
        }else{
          return true;
        }
    }

}