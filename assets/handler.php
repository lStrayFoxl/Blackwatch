<?php

// Database connection
$dbh = new PDO('mysql:host=localhost;dbname=blackwatch', "root", "root");

if(isset($_GET["butConfirm"])) {
    $name    = $_GET["enterName"];
    $surname = $_GET["enterSurname"];
    $phone   = $_GET["enterPhone"];
    $address = $_GET["enterAddress"]; 
    $model   = $_GET["enterModel"];
    
    $sql = "INSERT INTO `orders`(`name`, `surname`, `phone`, `address`, `model`) VALUES (:name, :surname, :phone, :address, :model)";
    $params = [
        "name"    => $name,
        "surname" => $surname,
        "phone"   => $phone,
        "address" => $address,
        "model"   => $model
        ];
    $dbh->prepare($sql)->execute($params);
    header("Location: ../index.php");

}