<?php

require_once("Database.php");

$db = new Database();

if(!isset($_GET["id"])){
    header("location: index.php");
    die;
}

$sucess = $db->execute("DELETE FROM avaliacao WHERE id = :id" , [
   ":id" => $_GET["id"]
]);

if($sucess) {
    header("location: index.php");
} else {
    echo "Deu Erro";
}