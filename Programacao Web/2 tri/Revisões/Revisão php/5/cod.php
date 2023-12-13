<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 0;
    date_default_timezone_set("America/Sao_paulo");
    $data = date('d');
    while($num < 31){
        $num++;
        if($num  = $data){
        echo $num."<br>";
        die;
        }
    }
    ?>
</body>
</html>