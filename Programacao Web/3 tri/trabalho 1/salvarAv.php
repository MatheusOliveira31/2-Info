<?php

require_once("Database.php");

$db = new Database();

if($_POST["id"] > 0 ){

    //é uma edição
    $query = "UPDATE avaliacao   SET idObra = :idObra,
     nota = :nota,
     observacao = :observacao
     WHERE id = :id";

     $binds = [
        ":idObra" => $_POST["idObra"],
        ":nota" => $_POST["nota"],
        ":observacao" => $_POST["observacao"],
        ":id" => $_POST["id"],
     ];

} else {
    $query = "INSERT INTO avaliacao(idObra, nota, observacao) 
    VALUES (:idObra, :nota, :observacao)";

    $binds = [
        ":idObra" => $_POST["idObra"],
        ":nota" => $_POST["nota"],
        ":observacao" => $_POST["observacao"]
     ];

}

$sucess = $db->execute($query, $binds);
if($sucess) {
    header("location: index.php");
} else {
    echo "deu erro :(";
}