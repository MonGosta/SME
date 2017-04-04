<?php

namespace Mongosta\Controller;

use Mongosta\Bootstrap\View;
use Mongosta\Model\UserModel as User;
use Mongosta\Repository\UserRepository as Repo;

class UserController
{
    function index()
    {

        //Repo::delete(6);
        $nombres = Repo::getAll();
        $view = new View("src/views/user");
        $view->render('index.php', ['nombres' => $nombres]);

        /*$usuario = Repo::findById(3);
        $view = new View("src/views/user");
        $view->render('index.php', ['user' => $usuario]);*/


    }

    function show()
    {
        $user = Repo::findByEmail(1);
        var_dump($user);
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
}

