<?php

namespace Mongosta\Repository;

use \PDO;
use Mongosta\Bootstrap\Database as Db;
use Mongosta\Model\ClientModel as Client;

class ClientRepository
{
    static public function getAll()
    {
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM sme_clientes');

        foreach ($req as $cliente) {
            $clientes[] = new Client($cliente['nombre'], $cliente['email'], $cliente['telefono'], $cliente['id']);
        }
        //$clientes = $req;
        return $clientes;
    }

    static public function findById($id)
    {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM sme_clientes WHERE ID= :id');
        $req->execute(array('id' => $id));
        $req = $req->fetch();
        // var_dump($req);
        $client = new Client($req['nombre'], $req['email'], $req['telefono'], $req['id']);
        return $client;
    }

    public function create()
    {

        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO sme_clientes (nombre, email, telefono) 
      VALUES (:nombre, :email, :telefono);');

        $req->execute(array(
                ':nombre' => $this->getNombre(),
                ':email' => $this->getEmail(),
                ':telefono' => $this->getTelefono(),
                ':id' => $this->getId()
            )
        );

    }

    public static function delete($id)
    {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('DELETE FROM sme_clientes WHERE id = :id');
        $req->execute(array('id' => $id));

    }


    public function update()
    {
        $db = Db::getInstance();
        $req = $db->prepare('UPDATE sme_clientes SET nombre = :nombre, email = :email , telefono = :telefono , 
                          id = :id  WHERE id = :id;');

        $req->execute(array(
                ':nombre' => $this->getNombre(),
                ':email' => $this->getEmail(),
                ':telefono' => $this->getTelefono(),
                ':id' => $this->getId()
            )
        );

    }

    static public function save($user)
    {
        $id = $user->getEmail();
        if (findById($id) != null) {
            update();
        } else {
            Client::save();
        }
    }

}