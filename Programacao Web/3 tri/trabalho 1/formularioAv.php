<?php
    if(isset($_GET["id"])){


    require_once("Database.php");

    $db = new Database();
    $avaliacoes = $db->select("SELECT * FROM avaliacao WHERE id = :id", [":id" => $_GET["id"]]);

    $id = $avaliacoes[0]["id"];
    $idObra = $avaliacoes[0]["idObra"];
    $nota = $avaliacoes[0]["nota"];
    $observacao = $avaliacoes[0]["observacao"];

    } else {

        $id = 0;
        $idObra = "";
        $nota = "";
        $observacao = "";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario da Avaliação</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="titleform">Formulario da Avaliação</h1>
    <div class="allformul">
    <form action="salvarAv.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="idObra" placeholder="ID da Obra" value="<?php echo $idObra; ?>">
        <br>
        <input type="text" name="nota" placeholder="Nota" value="<?php echo $nota; ?>">
        <br>    
        <input type="text" name="observacao" placeholder="Observação" value="<?php echo $observacao; ?>">
        <br>    
        <button class="btn" type="submit">Salvar</button>
        </form>
</body>
</html>