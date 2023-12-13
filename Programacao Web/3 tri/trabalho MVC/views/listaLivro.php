<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Lista de Usuarios</h1>
    <a href="usuario.php">Inserir novo usuario</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach($usuarios as $usuario) {
                echo "<tr>";
                echo "<td>". $usuario->getId(). "</td>";
                echo "<td>". $usuario->getNome(). "</td>";
                echo "<td>". $usuario->getLogin(). "</td>";
                echo "<td>";
                    echo "<a href = 'usuario.php?id=". $usuario->getId() . "'>Editar</a>";
                    echo "<br>";
                    echo "<a href = 'excluirUsuario.php?id=". $usuario->getId() . "'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>