<?php

require_once("Database.php");

$db = new Database();

if($_POST["id"] > 0 ){

    //é uma edição
    $query = "UPDATE carros SET marca = :marca,
     modelo = :modelo,
     ano = :ano,
     placa = :placa,
     chassi = :chassi,
     cor = :cor
     WHERE id = :id";

     $binds = [
        ":marca" => $_POST["marca"],
        ":modelo" => $_POST["modelo"],
        ":ano" => $_POST["ano"],
        ":placa"  => $_POST["placa"],
        ":chassi" => $_POST["chassi"],
        ":cor" => $_POST["cor"],
        ":id" => $_POST["id"],
     ];

} else {
    $query = "INSERT INTO carros(marca, modelo, ano, placa, chassi, cor) 
    VALUES (:marca, :modelo, :ano, :placa, :chassi, :cor)";

    $binds = [
        ":marca" => $_POST["marca"],
        ":modelo" => $_POST["modelo"],
        ":ano" => $_POST["ano"],
        ":placa"  => $_POST["placa"],
        ":chassi" => $_POST["chassi"],
        ":cor" => $_POST["cor"]
     ];

}

$sucess = $db->execute($query, $binds);
if($sucess) {
    header("location: index.php");
} else {
    echo "deu erro :(";
}