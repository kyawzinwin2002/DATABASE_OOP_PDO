<?php
system("clear");

//PHP Database CRUD (OOP)
// $host = "localhost";
// $username = "kyaw";
// $password = "0000";
// $database = "CRUD";

// $conn = new mysqli($host,$username,$password,$database);

//Create
// $sql = "INSERT INTO doubtMen (name,money) VALUES ('HOHOHO',1500)";
// $query = $conn->query($sql);
// if($query){
//     echo "Created Successfully";
// }

//Read All
// $sql = "SELECT * FROM doubtMen LIMIT 5";
// $query = $conn->query($sql);
// $lists = [];
// while($row = $query->fetch_object()){
//     $lists[] = $row;
// }
// print_r($lists);

//Read Single
// $sql = "SELECT * FROM doubtMen WHERE id=2";
// $query = $conn->query($sql);
// $row = $query->fetch_object();
// print_r($row);

//Update
// $sql = "UPDATE doubtMen SET name='UUU',money=8989 WHERE id=2";
// $query = $conn->query($sql);
// if($query){
//     echo "Updated Successfully";
// }

//Delete
// $sql = "DELETE FROM doubtMen WHERE id=2";
// $query = $conn->query($sql);
// if($query){
//     echo "Deleted Successfully";
// }

//Prepared Statements
// $stmt = $conn->prepare("INSERT INTO doubtMen (name,money) VALUES (?,?)");
// $stmt->bind_param("si",$name,$money);
// $name = "Zoe";
// $money = 2890;
// $stmt->execute();

// $stmt = $conn->prepare("DELETE FROM doubtMen WHERE id=?");
// $stmt->bind_param("i",$id);
// $id = 115;
// $stmt->execute();

// $stmt = $conn->prepare("UPDATE doubtMen SET name=?,money=? WHERE id=?");
// $stmt->bind_param("sii",$name,$money,$id);
// $name = "Kyaw Zin Win";
// $money = 1500;
// $id = 114;
// $stmt->execute();

//PHP Database (PDO)
// $host = "localhost";
// $username = "kyaw";
// $password = "0000";
// $database = "CRUD";
// $conn = new PDO("mysql:host=$host;dbname=$database",$username,$password);

// $stmt = $conn->prepare("INSERT INTO doubtMen (name,money) VALUES (:name,:money)");

// $stmt->bindParam(":name",$name);
// $stmt->bindParam(":money",$money);
// $money = 6666;
// $name = "Rose";
// $stmt->execute();

// $sql = "DELETE FROM doubtMen WHERE id=3";
// $query = $conn->query($sql);

// $stmt = $conn->prepare("UPDATE doubtMen SET name=:name,money=:money WHERE id=:id");
// $stmt->bindParam(":name",$name);
// $stmt->bindParam(":money",$money);
// $stmt->bindParam(":id",$id);
// $name = "Jennie";
// $money = 678;
// $id = 4;
// $stmt->execute();

// $sql = "SELECT * FROM doubtMen WHERE id=4";
// $query = $conn->query($sql);
// $row = $query->fetch(PDO::FETCH_OBJ);
// print_r($row);

// $sql = "SELECT * FROM doubtMen LIMIT 10";
// $query = $conn->query($sql);
// $rows = $query->fetchAll(PDO::FETCH_OBJ);
// print_r($rows);