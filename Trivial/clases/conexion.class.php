<?php
session_start();
class Conexion
{
    private $dbh;
    //establecemos la conexión con la bd 
    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=trivial', 'root', '');
            $this->dbh->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage();
            die();
        }
    }
 
    public function prepare($sql)
    {
        return $this->dbh->prepare($sql);
    }
}