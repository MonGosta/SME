<?php

namespace Mongosta\Controller;

use Mongosta\Bootstrap\View;
use Mongosta\Model\UserModel as User;
use Mongosta\Repository\UserRepository as Repo;
use Mongosta\Repository\ClientRepository as Client_repo;
use Mongosta\Repository\EventRepository as Event_repo;

class UserController
{
    function index()
    {
        $nombres = Repo::getAll();
        $view = new View("src/views/user");
        $view->render('index.php', ['nombres' => $nombres]);
    }

  

    function register()
    {
        if (isset($_POST['nombre'])) {

            $user = new User ($_POST['nombre'],
                $_POST['usuario'],
                $_POST['contrasena'],
                $_POST['email'],
                $_POST['telefono'],
                $_POST['dni']
            );
            $user->save();
        } else {

            $user = new User();
        }
        $view = new View("src/views/user");
        $view->render('register.php', ['user' => $user]);


    }

    function delete()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            var_dump($email);
            $user = new User();
            //var_dump($user);
            $user = Repo::findByEmail($email);
            $user->delete();
        } else {
            $user = new User();
        }
        $view = new View("src/views/user");
        $view->render('delete.php', ['user' => $user]);
    }

     function login(){
        $view = new View("src/views/user");
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];
            $pass =  password_hash($contrasena, PASSWORD_DEFAULT);
            $user = Repo::findByEmail($email);
            $valid = $user->isValid($user->getEmail());
            $pass_bbdd = $user->getContrasena();
            if($valid){
                echo "usuario incorrecto";
                $user = new User();              
                $view->render('login.php', ['user' => $user]);
            }else{
                if(password_verify($contrasena, $pass_bbdd)){
                        if($user->getId_cliente()==1){
                               $clients = Client_repo::getAll();
                               $events = Event_repo::findById_cliente($user->getId_cliente());
                               $view->render('welcome_casfid.php', ['user' => $user,'clients' => $clients, 'events' => $events]);
                        }else{
                        $client = Client_repo::findById($user->getId_cliente());
                        $event = Event_repo::findById_cliente($client->getId());
                        $view->render('welcome.php', ['user' => $user,'client' => $client , 'event' =>$event]);
                        }
                }else{
                    echo "Password incorrecto";
                }
            }
        }else{
                $user = new User();
                $view->render('login.php', ['user' => $user]);
        }    
    }
}

