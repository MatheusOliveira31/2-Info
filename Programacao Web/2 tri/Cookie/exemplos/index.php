<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos Cookie</title>
    <style>
        body {
           background-color: #fff;
            color: #000;
            font-size: 20px;
        }
        a {
            color: #000;
            text-decoration:none;
        }
        body.dark{
            background-color: #000;
            color: #fff;
        }
        body.dark a {
            color: #fff;
        }
    </style>
</head>
<body class="<?php echo $_COOKIE["tema"] ?? ""; ?> ">
    <h1>Olá mundo!</h1>
    <button><a href="lightmode.php">Usar modo claro</a></button>
    <br>
    <button><a href="darkmode.php">Usar modo escuro</a></button>
</body>
</html>