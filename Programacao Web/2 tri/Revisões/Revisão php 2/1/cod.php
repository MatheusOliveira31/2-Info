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
    function soma($num_1,$num_2){

        $total = $num_1 + $num_2;
      
        return $total;
      
      }
      echo "Soma de 5 + 2 = ".soma(5,2);
      echo "<br>";
      function sub($num_1,$num_2){

        $total = $num_1 - $num_2;
      
        return $total;
      
      }
      echo "Subtração de 10 - 8= ".sub(10,8);
      echo "<br>";
      function mult($num_1,$num_2){

        $total = $num_1 * $num_2;
      
        return $total;
      
      }
      echo "Multiplicação de 7 * 4 = ".mult(7,4);
      echo "<br>";
      function div($num_1,$num_2){

        $total = $num_1 / $num_2;
      
        return $total;
      
      }
      echo "Divisão de 6 / 3 = ".div(6,3);
      echo "<br>";
    ?>
</body>
</html>