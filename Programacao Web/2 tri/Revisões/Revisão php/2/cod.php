<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = rand(1,15);
    $triplo = $num * 3;
    for($i = $num; $i <= $triplo; $i++){
        echo $i;
        if($num % 7 == 0){
            break;
        }
    }
    ?>
</body>
</html>