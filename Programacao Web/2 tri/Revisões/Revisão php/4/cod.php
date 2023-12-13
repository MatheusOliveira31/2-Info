<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ginastas[0]["nome"] = "Jade";
    $ginastas[0]["nota"] = 12.95;
    $ginastas[0]["pais"] = "Brasil";
    $ginastas[1]["nome"] = "Shawn";
    $ginastas[1]["nota"] = 13.50;
    $ginastas[1]["pais"] = "EUA";
    $ginastas[2]["nome"] = "Daiane";
    $ginastas[2]["nota"] = 14.35;
    $ginastas[2]["pais"] = "Brasil";
    $ginastas[3]["nome"] = "Nadia";
    $ginastas[3]["nota"] = 12.90;
    $ginastas[3]["pais"] = "Romênia";

    echo "Nome das ginastas <br>";
    foreach($ginastas as $ginastas){
        echo $ginastas["nome"]."<br>";
    }
    echo "<br>Media de notas<br>";
    $somaNotas = 0;
    foreach($ginastas as $ginastas){
        $somaNotas =+ $ginastas["nota"];
    }
    $mediaNotas = $somaNotas / count($ginastas);
    echo $mediaNotas;
    ?>
</body>
</html>