<?php

// Database connection
$dbh = new PDO('mysql:host=localhost;dbname=blackwatch', "root", "root");

// Getting data from a form
if(isset($_POST["butConfirm"])) {
    $name    = $_POST["enterName"];
    $surname = $_POST["enterSurname"];
    $phone   = $_POST["enterPhone"];
    $address = $_POST["enterAddress"]; 
    $model   = $_POST["enterModel"];
    
    // Sql-query to database
    $sql = "INSERT INTO `orders`(`name`, `surname`, `phone`, `address`, `model`) VALUES (:name, :surname, :phone, :address, :model)";
    $params = [
        "name"    => $name,
        "surname" => $surname,
        "phone"   => $phone,
        "address" => $address,
        "model"   => $model
        ];
    
    // Sending data to the database
    $dbh->prepare($sql)->execute($params);
    header("Location: ../index.php");

}