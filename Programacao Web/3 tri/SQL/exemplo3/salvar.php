<?php
   //verificando se recebeu os dados do form
   if(empty($_POST["marca"])){
      echo"Dados não infomados";
      die;
   }

    $pdo = new PDO("mysql:host=localhost;dbname=detran", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        

    //Inserindo um carro
    $query = "INSERT INTO carros(marca, modelo, ano , placa, chassi, cor)
     VALUES (:marca, :modelo, :ano , :placa, :chassi, :cor)";

     $stmt = $pdo->prepare($query);

     //Atribuindo os valores as variaveis
     $stmt->bindValue(":marca", $_POST["marca"]);
     $stmt->bindValue(":modelo", $_POST["modelo"]);
     $stmt->bindValue(":ano", $_POST["ano"]);
     $stmt->bindValue(":placa", $_POST["placa"]);
     $stmt->bindValue(":chassi", $_POST["chassi"]);
     $stmt->bindValue(":cor", $_POST["cor"]);

     //roda a query
     $sucesso = $stmt->execute();
     if($sucesso) {
       header("location: index.php");
     } else {
        echo "Deu erro";
     }