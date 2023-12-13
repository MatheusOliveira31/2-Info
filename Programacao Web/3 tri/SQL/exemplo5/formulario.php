<?php
    if(isset($_GET["id"])){

    //é edição

    require_once("Database.php");

    $db = new Database();
    $carro = $db->select("SELECT * FROM carros WHERE id = :id", [":id" => $_GET["id"]]);

    $id = $carro[0]["id"];
    $marca = $carro[0]["marca"];
    $modelo = $carro[0]["modelo"];
    $ano = $carro[0]["ano"];
    $placa = $carro[0]["placa"];
    $chassi = $carro[0]["chassi"];
    $cor = $carro[0]["cor"];

    } else {
        //é inserção

        $id = 0;
        $marca = "";
        $modelo = "";
        $ano = "";
        $placa = "";
        $chassi = "";
        $cor = "";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Carro</title>
</head>
<body>
    <h1>Formulario de Carro</h1>
    <a href="index.php">Voltar</a>
    <form action="salvar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="marca" placeholder="Marca" value="<?php echo $marca; ?>">
        <br>
        <input type="text" name="modelo" placeholder="modelo" value="<?php echo $modelo; ?>">
        <br>    
        <input type="number" name="ano" placeholder="Ano" value="<?php echo $ano; ?>">
        <br>    
        <input type="text" name="placa" placeholder="Placa" value="<?php echo $placa; ?>">
        <br>    
        <input type="text" name="chassi" placeholder="chassi" value="<?php echo $chassi; ?>">
        <br>    
        <input type="text" name="cor" placeholder="cor" value="<?php echo $cor; ?>">
        <br>
        <button type="submit">Salvar</button>
        </form>
</body>
</html>