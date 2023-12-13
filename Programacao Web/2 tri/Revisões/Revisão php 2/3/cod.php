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
    $num = 0;
    echo"<ul>";
     while($num <= 100){
        $num++;
        if($num % 3 == 0){
            echo "<li>$num</li>";
        }
    }
    echo"</ul>";
    ?>
</body>
</html>