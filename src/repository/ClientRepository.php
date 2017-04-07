<?php

namespace Mongosta\Repository;

use Mongosta\Bootstrap\Database as Db;
use Mongosta\Model\ClientModel as Client;

class ClientRepository
{

<<<<<<< HEAD
  static public function getAll(){
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM sme_clientes');
    foreach ($req as $cliente) {
        $clientes[] = new Client($cliente['nombre'],$cliente['email'], 
                                $cliente['telefono'],$cliente['ID']);
=======
    static public function getAll()
    {
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM sme_clientes');
        foreach ($req as $cliente) {
            $clientes[] = new Client($cliente['ID'], $cliente['nombre'], $cliente['email'],
                $cliente['telefono']);
        }
        return $clientes;
>>>>>>> 604c6c51aac7067ceb54fe3cc74e983ea607acad
    }

    static public function findByEmail($email)
    {

        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM sme_clientes WHERE email= :email');
        $req->execute(array(':email' => $email));
        $req = $req->fetch();
        $client = new Client($req['nombre'], $req['email'], $req['telefono'], $req['ID']);
        return $client;
    }

<<<<<<< HEAD
  static public function findById($id){

    $db = Db::getInstance();
    $req = $db->prepare('SELECT * FROM sme_clientes WHERE ID = :id');
    $req->execute(array(':id' => $id));
    $req = $req->fetch();
    $client = new Client($req['nombre'], $req['email'], $req['telefono'], $req['ID']); 
    return $client;
 }

 static public function create($client){
    $db = Db::getInstance();
    $req = $db->prepare('INSERT INTO sme_clientes (nombre, email, telefono) 
=======
    static public function create($client)
    {
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO sme_clientes (nombre, email, telefono) 
>>>>>>> 604c6c51aac7067ceb54fe3cc74e983ea607acad
      VALUES (:nombre, :email, :telefono);');
        $req->execute(array(':nombre' => $client->getNombre(), ':email' => $client->getEmail(),
                ':telefono' => $client->getTelefono())
        );
    }

    public static function delete($client)
    {
        $db = Db::getInstance();
        $email = $client->getEmail();
        $req = $db->prepare('DELETE FROM sme_clientes WHERE email = :email');
        $req->execute(array('email' => $email));

    }


<<<<<<< HEAD
  public function update($client){
    $db = Db::getInstance();
    $req = $db->prepare('UPDATE sme_clientes SET nombre = :nombre, email = :email , telefono = :telefono ,id = :id  WHERE email = :email;');
   
    $req->execute(array(':id' => $client->getId(),
                        ':nombre' => $client->getNombre(),
                        ':email' => $client->getEmail(),
                        ':telefono' => $client->getTelefono()
                        )
                  );
=======
    public function update($client)
    {
        $db = Db::getInstance();
        $req = $db->prepare('UPDATE sme_clientes SET nombre = :nombre, email = :email , telefono = :telefono ,id = :id  WHERE email = :email;');
>>>>>>> 604c6c51aac7067ceb54fe3cc74e983ea607acad

        $req->execute(array(':id' => $client->getId(),
                ':nombre' => $client->getNombre(),
                ':email' => $client->getEmail(),
                ':telefono' => $client->getTelefono(),
                ':id' => $client->getId()
            )
        );

    }

    static public function save($client)
    {
        $id = $client->getEmail();
        if (findByEmail($id) != null) {
            update();
        } else {
            Client::save();
        }
    }

}