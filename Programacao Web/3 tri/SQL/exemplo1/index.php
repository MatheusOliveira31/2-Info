<?php

    //Criando o objeto PDO

    $pdo = new PDO("mysql:host=localhost;dbname=detran", "root", "");

    //Definindo o tipo de erro do PDO com exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    
    //listando os carros
    $query = "SELECT * FROM carros";
    $statement = $pdo->prepare($query);
    $statement->execute();
    $carros = $statement->fetchAll();

    //exinindo o retorno da query
   // print_r($carros);

    //ixibindo o retornpo em tabelas

    echo "<table border=1 >";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Marca </th>";
    echo "<th> Modelo </th>";
    echo "<th> Ano</th>";
    echo "<th> Placa </th>";
    echo "<th> Chassi </th>";
    echo "<th> Cor </th>";
    echo "</tr>";
    foreach($carros as $carro) {
        echo "<tr>";
        echo "<td>" . $carro["id"] . "</td>";
        echo "<td>" . $carro["marca"] . "</td>";
        echo "<td>" . $carro["modelo"] . "</td>";
        echo "<td>" . $carro["ano"] . "</td>";
        echo "<td>" . $carro["placa"] . "</td>";
        echo "<td>" . $carro["chassi"] . "</td>";
        echo "<td>" . $carro["cor"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";