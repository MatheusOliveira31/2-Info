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
    $contador = 0;
    $n = 2;
    $impar = 0;
    $par=0;
    while($contador < $n){
    $vetor [$contador] = null;
    $contador++;
    }
    foreach ($vetor as $chave => $valor){
    $num = random_int(1,10);
    if($num % 2 ==0){
    $par++;
    }else{
    $impar++;
    }
    
    }
    echo "A quantidade de números ímpares é $impar
    ";
    echo "A quantidade de números pares é $par
    ";

    
    ?>
</body>
</html>