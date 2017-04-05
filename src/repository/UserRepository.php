<?php

namespace Mongosta\Repository;

use Mongosta\Bootstrap\Database as Db;
use Mongosta\Model\UserModel as User;

class UserRepository
{

    static public function getAll()
    {
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM sme_usuarios');

        foreach ($req as $usuario) {
            $nombres[] = new User($usuario['nombre'], $usuario['usuario'], $usuario['contrasena'],
                $usuario['email'], $usuario['telefono'], $usuario['dni'],
                $usuario['id_cliente']);
        }
        return $nombres;
    }

    static public function findByEmail($email)
    {
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM sme_usuarios WHERE email= :email');
        $req->execute(array(':email' => $email));
        $req = $req->fetch();

        $user = new User($req['nombre'], $req['usuario'], $req['contrasena'],
            $req['email'], $req['telefono'], $req['dni']);
        return $user;
    }

    static public function create($user)
    {

        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO sme_usuarios ( nombre, usuario, contrasena, email, 
        												  telefono,dni) 
        	                    VALUES (:nombre, :usuario, :contrasena, :email, :telefono, :dni);');
        $req->execute(array(':nombre' => $user->getNombre(),
                ':usuario' => $user->getUsuario(),
                ':contrasena' => $user->getContrasena(),
                ':email' => $user->getEmail(),
                ':telefono' => $user->getTelefono(),
                ':dni' => $user->getDni()
            )
        );


    }

    public static function delete($user)
    {
        $db = Db::getInstance();
        $email = $user->getEmail();
        $req = $db->prepare('DELETE FROM sme_usuarios WHERE email = :email');
        $req->execute(array('email' => $email));
    }


    public static function update($user)
    {
        $db = Db::getInstance();
        $req = $db->prepare('UPDATE sme_usuarios SET nombre = :nombre, usuario = :usuario , 
                             contrasena = :contrasena , email = :email , telefono = :telefono , 
                             dni = :dni   WHERE email = :email;');

        $req->execute(array(':id' => $user->getId(),
                ':nombre' => $user->getNombre(),
                ':usuario' => $user->getUsuario(),
                ':contrasena' => $user->getContrasena(),
                ':email' => $user->getEmail(),
                ':telefono' => $user->getTelefono(),
                ':dni' => $user->getDni()
            )
        );

    }


}
