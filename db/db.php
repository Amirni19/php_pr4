<?php

try{
    $host = 'localhost';
    $dbname = 'manual';
    $username = 'root';
    $password = 'root';
    $connect = new PDO("mysql:host=$host; dbname=$dbname; charset-utf8", $username, $password);
}
catch(PDOException $e){
    echo $e;
}