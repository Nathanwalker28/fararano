<?php
class Database
{
    /**
     * connexion à la base de données
     *
     * @return object
     */
    public static function getPdo()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=fararano;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $pdo;
    }
}
