<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Filmes e Series</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <h1 id="geromel"> Gerenciador de Obras e avaliações</h1>
    <div class="container">
        <div id="fes">
        <h1 id="h1" >Listagem de Filmes e Series</h1>
        <br>
        <br>
        <a id="novaObra" href="formulario.php">Nova Obra</a>
        <br>
        <div id="dentro">
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sinopse</th>
                <th>Tipo</th>
                <th>Gênero</th>
                <th>Assistida</th>
            </tr>
            <?php
                require_once("Database.php");

                $db = new Database();
                $obras = $db->select("SELECT * FROM obras");

                foreach($obras as $obra){
                    echo "<tr>";
                    echo "<td>" . $obra["id"] . "</td>";
                    echo "<td>" . $obra["nome"] . "</td>";    
                    echo "<td>" . $obra["sinopse"] . "</td>";
                    echo "<td>" . $obra["tipo"] . "</td>";
                    echo "<td>" . $obra["genero"] . "</td>";
                    echo "<td>" . $obra["assistida"] . "</td>";
                    echo "<td>";
                    echo "<a class='gremio' href='formulario.php?id=" . $obra["id"] .  "'>Editar</a>";
                    echo "<a class='gremio' href='excluir.php?id=" . $obra["id"] .  "'>Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </div>
        </div>
        <div id="aval">
        <h1 id="h2">Avaliações</h1>
        <a id="novaObra1" href="formularioAv.php">Nova Avaliação</a>
        <br>
        <div id="dentro1">
        <table>
            <tr>
                <th>ID</th>
                <th>ID da Obra</th>
                <th>Nota</th>
                <th>Observação</th>
            </tr>
            <?php
                require_once("Database.php");

                $db = new Database();
                $avaliacao = $db->select("SELECT * FROM avaliacao");

                foreach($avaliacao as $avaliacoes){
                    echo "<tr>";    
                    echo "<td>" . $avaliacoes["id"] . "</td>";
                    echo "<td>" . $avaliacoes["idObra"] . "</td>";    
                    echo "<td>" . $avaliacoes["nota"] . "</td>";
                    echo "<td>" . $avaliacoes["observacao"] . "</td>";
                    echo "<td>";
                    echo "<a class='gremio' href='formularioAv.php?id=" . $avaliacoes["id"] .  "'>Editar</a>";
                    echo "<a class='gremio' href='excluirAv.php?id=" . $avaliacoes["id"] .  "'>Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </div>
        </div>
        </div>
</body>
</html>