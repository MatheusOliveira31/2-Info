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
    function bhaskara($a, $b, $c){
        $delta = $b ** 2 - (4 * $a * $c);
        if ($delta < 0){
            echo ", não existe raiz real";
        }else{
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "x1 = $x1 e x2 = $x2";
        }
    }

    bhaskara(4, 2, -6);
    bhaskara(7, 3, 4);
    ?>
</body>
</html>