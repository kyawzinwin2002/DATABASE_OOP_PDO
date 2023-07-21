<?php

system("clear");
$db = "db.sqlite";
$tableName = "users";
$conn = new SQLite3($db);

$sql = "CREATE TABLE $tableName (
    id INT PRIMARY KEY,
    name VARCHAR(20),
    money FLOAT
)";

$query = $conn->exec($sql);
var_dump($query);

// $sql = "INSERT INTO users (name,money) VALUES(:name,:money)";
// $stmt = $conn->prepare($sql);
// $stmt->bindParam(":name",$name);
// $stmt->bindParam(":money",$money);
// $name = "Kyaw";
// $money = 500;
// var_dump($stmt->execute());
