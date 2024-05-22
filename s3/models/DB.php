<?php

class DB
{

    protected static $connec;

    public static function getInstance()
    {

        if (empty(self::$connec)) {

            $param = array(
                "host" => "localhost",
                "port" => "3306",
                "user" => "root",
                "pass" => "root",
                "db" => "desarrollo_web",
                "charset" => "UTF-8"
            );

            try {
                // self::$connec = new PDO("mysql:host=" . $param['host'] . ";dbname=" . $param['db'] . ", " . $param['user'] . ", " . $param['pass']);
                // self::$connec = new PDO('mysql:host=localhost;dbname=desarrollo_web_2', 'dweb', 'AccesoRoot123');
                self::$connec = new PDO('pgsql:host=localhost;dbname=agro', 'postgres', 'POSTGRES');
            } catch (PDOException $error) {
                echo $error->getMessage();
            }
        }

        return self::$connec;
    }
}
