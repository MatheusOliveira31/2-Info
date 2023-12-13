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
    $vetor = [$count] = rand(1,100);
    foreach($vetor as $chave => $valor){
        $divisor = 0;
        echo "<p> Vendo o numero $valor <p>";
        for($num = $valor; $num >=  1; $num--)
        {
            if($valor % $num == 0){
                $divisor++;
            }
            if($divisor > 2){
                echo "<p>O numero $valor nao é primo <p>";
                break;
            }
        }
        if($divisor == 2){
            $primo[]= $valor;
        }
    }
    echo "<hr>";
    echo"<p>Segue os numeros primos<p>";
    foreach($primo as $chave => $valor){
        echo $valor . " - ";
    }
    ?>
</body>
</html>