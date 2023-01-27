<?php

class AccesDonnees
{
    private PDO $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=restaurant";
        $this->pdo = new PDO($dsn, 'root', 'Passw0rd44');
    }

    function getConnection(): PDO
    {
        return $this->pdo;
    }

}

?>
