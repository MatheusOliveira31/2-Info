<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="salvar.php" method="POST">
        <input type="text" name="marca" placeholder="Marca">
        <br>
        <input type="text" name="modelo" placeholder="Modelo">
        <br>
        <input type="number" name="ano" placeholder="Ano">
        <br>
        <input type="text" name="placa" placeholder="Placa">
        <br>
        <input type="text" name="chassi" placeholder="Chassi">
        <br>
        <input type="text" name="cor" placeholder="Cor">
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>