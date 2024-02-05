<?php

class Dbh{
    private $host = "localhost";
    private $dbname = "myfirstdatabase";
    private $dbusername = "root";
    private $dbpassword = "";

    protected function connect(){
        try{
            $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";dbname=".$this->dbname.$this->dbusername.$this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }catch (PDOException $e){
            die("Could not connect ".$e->getMessage());
        }
    }

    public function setpassword($password){
        $this->dbpassword = $password;
    }

    public function __construct($password){
        $this-> dbpassword = $password;
    }
}