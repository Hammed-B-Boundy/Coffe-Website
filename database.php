<?php
    $host = "localhost";
    $dbname = "Coffe_project";
    $username = "root";
    $password = "";
    $PDO;

    try{
        $PDO = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die("<h1>Impossible de se connecter à la base de donnée</h1>");
    }

    
    