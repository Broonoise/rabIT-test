<?php

class Database
{
    //Adatbázis hozzáférési adatok
    public static $host = "localhost";
    public static $user = "root";
    public static $pass = "";
    public static $name = "hegedus_alex_koppany";

    //Adatbázis kapcsolat
    private static function connect()
    {
        $pdo = new PDO("mysql:host =".self::$host.";dbname=".self::$name.";charset=utf8",self::$user,self::$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
    }

    //Query futtatás
    public static function query($query, $params = array())
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        if(explode(' ', $query)[0] == 'SELECT') 
        {
            $data = $statement->fetchAll();
            return $data;
        }
    }
}

?>