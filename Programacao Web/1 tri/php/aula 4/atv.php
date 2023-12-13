<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php
    $palavra = 'casa';
    $tamanho = strlen($palavra);
    echo $tamanho;
   
    //quantidade de caracteres
    ?>
    <br>
    <?php
    $palavra = 'escola';
    $palavra = substr($palavra,0,3);
    echo $palavra;
    //quantidades de caractres escolhidos
    ?>
    <br>
     <?php
    $palavra = 'vaca';
    $palavra = str_replace('v','f',$palavra);
    echo $palavra;
    //trocar o caracter
   
?>
<br>
 <?php
    $frutas = array("Maçã" , "Amora" , "Uva");
    echo $frutas[1];
    //escreveu a palavra da segunda colocaçãp
?>
<br>
 <?php
     $frutas = array("Maçã" , "Amora" , "Uva");
     foreach($frutas as $frutas){
        echo $frutas."";
     }
     //escreve as strings que estao dentro da variavel
?>
<br>
 <?php
    $frutas = array("Maçã" , "Amora" , "Uva");
    sort($frutas);
    foreach($frutas as $frutas){
    echo $frutas." ";
    }
    //troca o vetor de posicao
?>
<br>
 <?php
    $frutas = array("Maçã" , "Amora" , "Uva");
   $frutas[] ="Abacaxi";
   $frutas[] ="Melão";
   foreach($frutas as $frutas){
    echo $frutas." ";
}
//acrescenta valores a variavel
?>
<br>
 <?php
    $quantidade["Banana"] = 10;
    $quantidade["Amora"] = 2;
    $quantidade["Melancia"] = 7;
    foreach($quantidade as $q){
    echo $q."";
}
// escreve o valor do vetor
?>
<br>
 <?php
    $quantidade["Banana"] = 10;
    $quantidade["Amora"] = 2;
    $quantidade["Melancia"] = 7;
    foreach($quantidade as $f => $q){
    echo $f." -> ".$q."<br>";
}
//escreve o vetor com seu valor
?>
<br>
 <?php
  /*
    $x[0][0] = 15;
    $x[0][1] = 6;
    $x[1][0] = 2;
    $x[1][1] = 5;
    foreach($x as $v)
    echo $v."<br>";
    */
?>
<br>
 <?php
    $x[0][0] = 15;
    $x[0][1] = 6;
    $x[1][0] = 2;
    $x[1][1] = 5;
    foreach($x as $v)
    foreach($v as $z)
    echo $z."<br>";
    //valores em uma matriz
?>
<br>
 <?php
    $x[0]["nome"] = "Beatriz";
    $x[0]["idade"] = 6;
    $x[1]["nome"] = "Carlos";
    $x[1]["idade"] = 5;
    foreach($x as $v)
    foreach($v as $z)
    echo $z."<br>";
    
?>
<br>
 <?php
     $x[0]["nome"] = "Beatriz";
     $x[0]["idade"] = 6;
     $x[1]["nome"] = "Carlos";
     $x[1]["idade"] = 5;
     foreach($x as $i => $v)
     foreach($v as $j => $z)
     echo $i." - ".$j." - ".$z."<br>";
?>
</body>
</html>
