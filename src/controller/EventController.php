<?php

namespace Mongosta\Controller;

use Mongosta\Bootstrap\View;
use Mongosta\Model\EventModel as Event;
use Mongosta\Repository\EventRepository as Repo;

class EventController
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
            $event = new Event ($_POST['nombre'],
                $_POST['email'],
                $_POST['telefono']
            );
            $event->save();
        } else {
            $event = new Event();
        }
        $view = new View("src/views/client");
        $view->render('register.php', ['client' => $client]);


    }

    function delete()
    {

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $client = new Client();
            $client = Repo::findByEmail($email);
            $client->delete();
        }
        $client = new Client();
        $view = new View("src/views/client");
        $view->render('delete.php', ['client' => $client]);
    }
}