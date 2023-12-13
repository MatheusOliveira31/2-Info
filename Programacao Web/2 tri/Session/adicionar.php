<?php
session_start();

$produtos =[
    1 => "Camiseta Adidas",
    2 =>"Camiseta Nike",
    3 => "Boné"
];

if(!isset($_GET["id"])){
    echo "Nenhum produto informado para a compra";
    die;
}
if(!array_key_exists($_GET["id"], $produtos)){
    echo "O produto informado não existe";
}

$_SESSION["carrinho"][] = $produtos[$_GET["id"]];

header("location: carrinho.php");