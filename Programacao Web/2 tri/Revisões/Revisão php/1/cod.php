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
    date_default_timezone_set("America/Sao_paulo");
    $hora = date("H");
    echo $hora;
    if($hora >= 6 && $hora <= 12){
        echo "<p style = 'background-color:green'> Bom dia </p>";

    }elseif($hora >= 12 && $hora <= 18){
        echo "<p style = 'background-color:red'> Boa Tarde</p>";
    }else{
        echo "<p style = 'background-color:blue'> Boa Noite</p>";
    }
    ?>
</body>
</html>