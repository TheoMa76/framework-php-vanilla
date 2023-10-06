<?php
require_once "./src/dbConnect.php";



function getById(){
    $connection->query("SELECT * FROM contacts WHERE id = '".htmlspecialchars($_GET['id']));
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
}

function create(){
    $statement = $connection->prepare("INSERT INTO `contacts` (`name`, `surname` , `status`) VALUES ('Maerten' , 'Theo' , 'online') ");
    //$statement->bindParam(1,$_GET['surname']);
    $statement->execute();
}

function getAll(){
    $statement = $connection->query("SELECT * FROM `contacts` WHERE 1");
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
}

function delete(){

}

function deleteById(){

}

function update(){
    
}