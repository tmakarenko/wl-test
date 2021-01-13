<?php


namespace App\Services;


use Doctrine\DBAL\DriverManager;

class DBService
{
    private static $db = null;
    public static function launch(){
        $conn = array(
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASS'],
            'host' => $_ENV['DB_HOST'],
            'driver' => $_ENV['DB_DRIVER'],
        );

        $conn = DriverManager::getConnection($conn);
        self::$db = $conn->createQueryBuilder();
    }

    public static function getDB(){
        return self::$db;
    }
}