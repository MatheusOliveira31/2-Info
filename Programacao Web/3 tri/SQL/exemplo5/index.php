<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Carros</title>
</head>
<body>
    <h1>Listagem de Carros</h1>
    <a href="formulario.php">Novo Carro</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Chassi</th>
            <th>Cor</th>
            <th>Ações</th>
        </tr>
        <?php
            require_once("Database.php");

            $db = new Database();
            $carros = $db->select("SELECT * FROM carros");

            foreach($carros as $carro){
                echo "<tr border=1>";
                echo "<td>" . $carro["id"] . "</td>";
                echo "<td>" . $carro["marca"] . "</td>";    
                echo "<td>" . $carro["modelo"] . "</td>";
                echo "<td>" . $carro["ano"] . "</td>";
                echo "<td>" . $carro["placa"] . "</td>";
                echo "<td>" . $carro["chassi"] . "</td>";
                echo "<td>" . $carro["cor"] . "</td>";
                echo "<td>";
                echo "<a href='formulario.php?id=" . $carro["id"] .  "'>Editar</a>";
                echo "<a href='excluir.php?id=" . $carro["id"] .  "'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>