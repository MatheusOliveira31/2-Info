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
    //90°, 77°, 52° e 12
    $f = array(90,77,52, 12);
    function celsius($f){
        return($f - 32)/1.8;
    }
    echo celsius($f[0])."<br>";
    echo celsius($f[1])."<br>";
    echo celsius($f[2])."<br>";
    echo celsius($f[3])."<br>";

    ?>
</body>
</html>