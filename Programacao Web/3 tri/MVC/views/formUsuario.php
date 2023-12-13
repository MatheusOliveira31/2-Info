<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuários</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário de Usuário</h1>
    <a href="usuarios.php">Voltar para Listagem</a>
    <form action="salvarUsuario.php" method="POST">
        <fieldset>
            <legend>Dados da usuario</legend>
            <input type="hidden" name="id" value="<?php echo $usuario->getId() ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da usuario" value="<?php echo $usuario->getNome(); ?>">
            <label for="nome">Login:</label>
            <input type="text" name="login" id="login" placeholder="Login da usuario" value="<?php echo $usuario->getLogin(); ?>">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Senha da usuario" >
            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>