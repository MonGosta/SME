<?php

namespace Mongosta\Bootstrap;

use \PDO;

class Database
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private static function connect()
    {

        return new PDO ('mysql:host=localhost;dbname=casfid', "root", "");

    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = self::connect();
        }
        return self::$instance;
    }
}