<?php

require_once("Database.php");


$db = new Database();

//selecionar todos os carros 

$carros = $db->select("SELECT * FROM carros");
echo "<pre>";
print_r($carros);