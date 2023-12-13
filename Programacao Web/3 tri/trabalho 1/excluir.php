<?php

require_once("Database.php");

$db = new Database();//Sempre que for manipular banco tem que fazer isso

if(!isset($_GET["id"])){
    header("location: index.php");
    die;
}

$sucess = $db->execute("DELETE FROM obras WHERE id = :id" , [
   ":id" => $_GET["id"]
]);

if($sucess) {
    header("location: index.php");
} else {
    echo "Deu Erro";
}