<?php

class LoginExample extends Dbh{


    private $username;
    private $password;

    
public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;
}


private function insertUser(){
    $query = "INSERT INTO   users (username, password) VALUES(:username, :password);";
}


}