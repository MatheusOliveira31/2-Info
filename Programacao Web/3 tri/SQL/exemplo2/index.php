<?php

    $pdo = new PDO("mysql:host=localhost;dbname=detran", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        

    //Inserindo um carro
    $query = "INSERT INTO carros(marca, modelo, ano , placa, chassi, cor)
     VALUES (:marca, :modelo, :ano , :placa, :chassi, :cor)";

     $stmt = $pdo->prepare($query);

     //Atribuindo os valores as variaveis
     $stmt->bindValue(":marca", "chevrolet");
     $stmt->bindValue(":modelo", "opala");
     $stmt->bindValue(":ano", 1970);
     $stmt->bindValue(":placa", "afsf234");
     $stmt->bindValue(":chassi", "4543fdbfdh");
     $stmt->bindValue(":cor", "preto");

     $sucesso = $stmt->execute();
     if($sucesso) {
        echo "Inserido com sucesso <br>";
        echo $pdo->lastInsertId();
     } else {
        echo "Deu erro";
     }