<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Lista de Disciplinas</h1>
    <a href="disciplina.php">Inserir nova disciplina</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach($disciplinas as $disciplina) {
                echo "<tr>";
                echo "<td>". $disciplina->getId(). "</td>";
                echo "<td>". $disciplina->getNome(). "</td>";
                echo "<td>";
                    echo "<a href = 'disciplina.php?id=". $disciplina->getId() . "'>Editar</a>";
                    echo "<br>";
                    echo "<a href = 'excluirDisciplina.php?id=". $disciplina->getId() . "'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>