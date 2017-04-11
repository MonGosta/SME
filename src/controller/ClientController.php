<?php

namespace Mongosta\Controller;

use Mongosta\Bootstrap\View;
use Mongosta\Model\ClientModel as Client;
use Mongosta\Model\UserModel as User;
use Mongosta\Repository\ClientRepository as Repo;

class ClientController
{
    function index()
    {
        $nombres = Repo::getAll();
        $view = new View("src/views/client");
        $view->render('index.php', ['nombres' => $nombres]);
    }


    function register()
    {
         

        if (isset($_POST['nombre'])) {
            var_dump(1);
            $client = new Client ($_POST['nombre'],
                $_POST['email'],
                $_POST['telefono']
            );
            $client->save();
            $client = Repo::findByEmail($client->getEmail());
            var_dump($client->getId());
           if (isset($_POST['nombre_usuario'])) {
            
            $user = new User ($_POST['nombre_usuario'],
                $_POST['usuario'],
                $_POST['contrasena'],
                $_POST['email_usuario'],
                $_POST['telefono_usuario'],
                $_POST['dni'],
                $client->getId()
            );
            $user->save();
            }
        } else {
            $client = new Client();
            $user = new User();
        }
        $view = new View("src/views/client");
        $view->render('register.php', ['client' => $client , 'user' =>$user]);


    }

    function delete()
    {

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $client = Repo::findByEmail($email);
            $client->delete();
        }
        $client = new Client();
        $view = new View("src/views/client");
        $view->render('delete.php', ['client' => $client]);
    }

     function show($id){
        $client = Repo::findById($id);
        $view = new View("src/views/client");
        $view->render('index.php', ['client' => $client]);
    }

}
