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
   
$funcionarios[0]["nome"] = "João";
$funcionarios[0]["salario"] = 2000;
$funcionarios[1]["nome"] = "Maria";
$funcionarios[1]["salario"] = 2500;
$funcionarios[2]["nome"] = "Pedro";
$funcionarios[2]["salario"] = 1800;
    
echo $funcionarios[1] ["salario"];
echo "<br>";

foreach($funcionarios as $funcionario){
    echo $funcionario["nome"];
    echo $funcionario ["salario"]. "<br>";
}

$salario = 0;
foreach($funcionarios as $funcionario){
   $salario = $funcionario ["salario"];
   echo $salario + $funcionario;
}

    ?>
</body>
</html>