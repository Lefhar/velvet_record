<?php

namespace Src;
use PDO;

/**
 * @brief  C'est la connexion à la bdd
 * Class include\Database
 */
class Database
{
    static $host = host;
    static $dbname = dbname;
    static $username = username;
    static $password = password;
    static $db = null;

    /**
     * @brief  Connexion à la base de donnée
     * @return PDO|void|null
     */
    static function connect()
    {
        try {
            if (!self::$db) {

                self::$db = new PDO('mysql:host=' . Database::$host . ';dbname=' . Database::$dbname . ';charset=utf8', Database::$username, Database::$password);


            }
        } catch (PDOException $e) {
            print "Erreur de connexion Sql!";
            die();
        }
        return self::$db;
    }
}