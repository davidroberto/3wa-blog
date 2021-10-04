<?php

require_once("DatabaseConnexionInterface.php");

class MysqlDatabaseConnexion implements DatabaseConnexionInterface
{

    public function connect(): ?PDO
    {
        $host = 'localhost';
        $username = 'root';
        $password = 'skateboard';
        $db = '3wa_blog';

        try{
            $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}
