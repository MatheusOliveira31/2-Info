<?php
    $dave_votes = 20;
    $thom_votes = 30;
    $james_votes = 40;
    $tyler_votes = 10;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["dave_vote"])) {
            $dave_votes++;
        }
        if (isset($_POST["thom_vote"])) {
            $thom_votes++;
        }
        if (isset($_POST["james_vote"])) {
            $james_votes++;
        }
        if (isset($_POST["tyler_vote"])) {
            $tyler_votes++;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Votação</title>
    <link rel="stylesheet" href="css2.css">
</head>
<body class="body">
    

<div class="header">
            <a href="#default" class="logo">Processo eleitoral 2026</a>
            <div class="header-right">
            <a href="index.php">Tela Inicial</a>
            <a href="processoeleitoral.php">Sobre o Processo eleitoral 2026</a>
            <a href="cadastro.php">Cadastre-se</a> 
            <a href="candidatos.php">Vote</a>
        </div>
        </div>

        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F9F9F9;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin-top: 2rem;
        }

        .graph-container {
            max-width: 600px;
            margin: 2rem auto;
            background-color: #FFF;
            border: 1px solid #E5E5E5;
            padding: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .graph-bar {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        
    </style>
</head>

    <h1>Gráfico de Votos</h1>

    <div class="graph-container">
        <div class="graph-bar">
<body class="body">
    <div class="header">
    </div>
    <div class="container">
        <table class="estatistica">
            <tr>
                <td>Dave Mustaine-PMG</td>
                <td><div  id="dave" class="porcentagem"></div></td>
                <td><?php echo $dave_votes ."%"; ?></td>
            </tr>
            <tr>
                <td>Thom Yorke-PRA</td>
                <td><div id="thom" class="porcentagem"></div></td>
                <td><?php echo $thom_votes ."%"; ?></td>
            </tr>
            <tr>
                <td>James Hetfield-PME</td>
                <td><div id="james" class="porcentagem"></div></td>
                <td><?php echo $james_votes ."%"; ?></td>
            </tr>
            <tr>
                <td>Tyler, The Creator-PT</td>
                <td><div id="tyler" class="porcentagem"></div></td>
                <td><?php echo $tyler_votes ."%"; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>