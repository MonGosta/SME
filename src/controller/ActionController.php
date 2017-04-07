<?php

namespace Mongosta\Controller;

use Mongosta\Bootstrap\View;
use Mongosta\Model\ActionModel as Action;
use Mongosta\Repository\ActionRepository as Repo;

class ActionController
{
    function index()
    {
        $actions = Repo::getAll();
        $view = new View("src/views/action");
        $view->render('index.php', ['actions' => $actions]);
    }

    function show()
    {
        $action = Repo::findByEmail(1);
    }


    function register()
    {

        if (isset($_POST['nombre'])) {
            $action = new Action ($_POST['nombre'],
                $_POST['texto'],
                $_POST['modo_foto']
            );
            $action->save();
        } else {
            $action = new Action();
        }
        $view = new View("src/views/action");
        $view->render('register.php', ['action' => $action]);


    }

    function delete()
    {

        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $action = new Action();
            //var_dump($action);
            $action = Repo::findByNombre($nombre);
            $action->delete();
        } else {
            $action = new Action();
        }
        $view = new View("src/views/action");
        $view->render('delete.php', ['action' => $action]);
    }

    
}