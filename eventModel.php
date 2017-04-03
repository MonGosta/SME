<?php

namespace Mongosta\Model;
    
class EventModel {
  private $acciones;
  private $clientes;
  private $dispositivos;
  private $eventos;
  private $login;
  private $participantes;
  private $participantesSesiones;
  private $publicaciones;
  private $pulseras;
  private $usuarios;

  public function __construct($acciones="", $cliente="", $dispositivos="", $evento="", $login="", $participantes="", $participantesSesiones="", $publicaciones="", $pulseras="", $usuarios=""){
    $this->acciones = $acciones;
    $this->cliente= $cliente;
    $this->dispositivos= $dispositivos;
    $this->evento= $evento;
    $this->login= $login;
    $this->participantes= $participantes;
    $this->participantes_sesiones= $participantes_sesiones;
    $this->publicaciones= $publicaciones;
    $this->pulseras=$pulseras;
    $this->usuarios= $usuarios;

  
  }
        
public function getAcciones(){
    return $this->acciones;
  }
  public function setAcciones($acciones){
    $this->acciones = $acciones;
  }


public function getCliente(){
    return $this->cliente;
  }
  public function setCliente($cliente){
    $this->cliente = $cliente;
  }


public function getDispositivos(){
    return $this->dispositivos;
  }
  public function setDispositivos($dispositivos){
    $this->dispositivos = $dispositivos;
  }


public function getEvento(){
    return $this->evento;
  }
  public function setEvento($evento){
    $this->evento = $evento;
  }


public function getLogin(){
    return $this->login;
  }
  public function setLogin($login){
  }


public function getParticipantes(){
    return $this->participantes;
  }
  public function setParticipantes($participantes){
    $this->participantes = $participantes;
  }


public function getParticipantes_sesiones(){
    return $this->participantes_sesiones;
  }
  public function setParticipantes_sesiones($participantes_sesiones){
    $this->participantes_sesiones = $participantes_sesiones;
  }


public function getPublicaciones(){
    return $this->publicaciones;
  }
  public function setPublicaciones($publicaciones){
    $this->publicaciones = $publicaciones;
  }


public function getPulseras(){
    return $this->pulseras;
  }
  public function setPulseras($pulseras){
    $this->pulseras = $pulseras;
  }


public function getUsuarios(){
    return $this->usuarios;
  }
  public function setUsuarios($usuarios){
    $this->usuarios = $usuarios;
  }
