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
     function maior_valor ($val1 , $val2 , $val3 , $val4 , $val5){
        $maior = max($val1 , $val2 , $val3 , $val4 , $val5);
        return $maior;
    }
    $num1 = 15;
    $num2 = 10;
    $num3 = 5;
    $num4 = 2;
    $maior = max($num1 , $num2 , $num3 , $num4);
    echo $maior
    ?>
</body>
</html>