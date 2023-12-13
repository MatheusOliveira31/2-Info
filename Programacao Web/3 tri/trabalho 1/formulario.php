<?php
    if(isset($_GET["id"])){

    //é edição

    require_once("Database.php");

    $db = new Database();
    $obra = $db->select("SELECT * FROM obras WHERE id = :id", [":id" => $_GET["id"]]);

    $id = $obra[0]["id"];
    $nome = $obra[0]["nome"];
    $sinopse = $obra[0]["sinopse"];
    $tipo = $obra[0]["tipo"];
    $genero = $obra[0]["genero"];
    $assistida = $obra[0]["assistida"];

    } else {
        //é inserção

        $id = 0;
        $nome = "";
        $sinopse = "";
        $tipo = "";
        $genero = "";
        $assistida = "";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de obra</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="titleform">Formulario de obra</h1>
    <div class="allformul">
    <form action="salvar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
        <br>
        <input type="text" name="sinopse" placeholder="Sinopse" value="<?php echo $sinopse; ?>">
        <br>    
        <select type="text" name="tipo" placeholder="Tipo" value="<?php echo $tipo; ?>">
        <option value="null"></option>
        <option value="filme">Filme</option>
        <option value="serie">Serie</option>
        </select>
        <br>    
        <input type="text" name="genero" placeholder="Gênero" value="<?php echo $genero; ?>">
        <br>    
        <select type="text" name="assistida" placeholder="Assistida" value="<?php echo $assistida; ?>">
        <option value="null"></option>
        <option value="1">Já</option>
        <option value="0">Não</option>
        </select>
        <br> 
        <button class="btn" type="submit">Salvar</button>
        </form>
        </div>
</body>
</html>