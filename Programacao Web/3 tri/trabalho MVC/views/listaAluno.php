<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Lista de Alunos</h1>
    <a href="aluno.php">Inserir novo aluno</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach($alunos as $aluno) {
                echo "<tr>";
                echo "<td>". $aluno->getId(). "</td>";
                echo "<td>". $aluno->getNome(). "</td>";
                echo "<td>". $aluno->getMatricula(). "</td>";
                echo "<td>";
                    echo "<a href = 'Aluno.php?id=". $aluno->getId() . "'>Editar</a>";
                    echo "<br>";
                    echo "<a href = 'excluirAluno.php?id=". $aluno->getId() . "'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>