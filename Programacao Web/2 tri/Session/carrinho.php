<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessoes - Exemplo</title>
</head>
<body>
    <h1>Meu carrinho</h1>
    <a href="index.php">Ver produtos da loja</a>
    <ul>
        <?php
            session_start();
            if(isset($_SESSION["carrinho"])){
                foreach($_SESSION["carrinho"] as $item){
                    echo "<li>$item</li>";
                }
            }else{
                echo"<li>O carrinho está vazio!</li>";
            }
        ?>
    </ul>
</body>
</html>