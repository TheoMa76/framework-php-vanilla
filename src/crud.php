<?php 
require_once "./src/dbConnect.php";



function getAll($connection){
    $statement = $connection->query("SELECT * FROM `contacts` WHERE 1");
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    dd($data);
}
function getById($connection, $id){
    $statement = $connection->prepare("SELECT * FROM `contacts` WHERE id =  ?");
    $statement->bindParam(1,$id);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

}
function create($connection,$name,$surname){ 
    $statement = $connection->prepare("INSERT INTO `contacts` (`name`, `surname`, `status`) VALUES (?, ?, 'online') ");
    $statement->bindParam(1,$name);
    $statement->bindParam(2,$surname);
    $statement->execute();
}
function deleteById($connection, $id){
    $statement = $connection->prepare("DELETE FROM `contacts` WHERE id = ?");
    $statement->bindParam(1, $id);
    $statement->execute();
}
function update($connection, $column,$valeur,$id){
    $statement = $connection->prepare("UPDATE `contacts` SET `".$column."` = ? WHERE id = ? ");
    $statement->bindParam(2, $id);
    $statement->bindParam(1, $valeur);
    $statement->execute();
}