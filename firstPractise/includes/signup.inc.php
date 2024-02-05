<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];

        require_once "../chapter2Diatel/LoginExample.php";
        require_once"../Dbh.php";

        $signup = new LoginExample($username, $pwd);

    }
    
    
    