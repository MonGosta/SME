<?php 
namespace Mongosta\Repository;

use \PDO;
use Mongosta\Bootstrap\Database as Db;
use Mongosta\Model\ClientModel as Client;

class ClientRepository{

  static public function getAll(){
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM sme_clientes');
    foreach ($req as $cliente) {
        $clientes[] = new Client($cliente['id'],$cliente['nombre'],$cliente['email'], 
                                $cliente['telefono']);
    }
    return $clientes;
  }

  static public function findByEmail($email){

    $db = Db::getInstance();
    $req = $db->prepare('SELECT * FROM sme_clientes WHERE email= :email');
    $req->execute(array(':email' => $email));
    $req = $req->fetch();
    $client = new Client($req['nombre'], $req['email'], $req['telefono'], $req['ID']); 
    return $client;
 }

 static public function create($client){
    $db = Db::getInstance();
    $req = $db->prepare('INSERT INTO sme_clientes (nombre, email, telefono) 
      VALUES (:nombre, :email, :telefono);');
      $req->execute(array(':nombre' => $client->getNombre(),':email' => $client->getEmail(), 
                          ':telefono' => $client->getTelefono())
                  ); 
  }

  public static function delete($client){
       $db = Db::getInstance();
        $email = $client->getEmail();
       $req = $db->prepare('DELETE FROM sme_clientes WHERE email = :email');
       $req->execute(array('email' => $email));

  }


  public function update(){
    $db = Db::getInstance();
    $req = $db->prepare('UPDATE sme_clientes SET nombre = :nombre, email = :email , telefono = :telefono ,id = :id  WHERE email = :email;');
   
    $req->execute(array(':id' => $this->getId(),
                        ':nombre' => $this->getNombre(),
                        ':email' => $this->getEmail(),
                        ':telefono' => $this->getTelefono(),
                        ':id' => $this->getId()
                        )
                  );

  }

 static public function save($client){
    $id=$client->getEmail();
    if(findByEmail($id)!=null){
      update();        
    }else{
      Client::save();
    }
 }
  
}