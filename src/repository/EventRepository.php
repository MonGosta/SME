<?php

namespace Mongosta\Repository;

use \PDO;
use Mongosta\Bootstrap\Database as db;
use Mongosta\EventModel\EventModel as em;


class EventRepository
{

    static public function getAll()
    {
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM sme_eventos');

        foreach ($req as $evento) {
            $eventos[] = new em();
        }
        //$nombres = $req;
        return $eventos;
    }


}


?>