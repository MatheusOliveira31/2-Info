<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Aluno</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário de Aluno</h1>
    <a href="Alunos.php">Voltar para Listagem</a>
    <form action="salvarAluno.php" method="POST">
        <fieldset>
            <legend>Dados do Aluno</legend>
            <input type="hidden" name="id" value="<?php echo $aluno->getId() ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do Aluno" value="<?php echo $aluno->getNome(); ?>">
            <br>
            <label for="matricula">Matricula:</label>
            <input type="text" name="matricula" id="matricula" placeholder="Matricula do Aluno" value="<?php echo $aluno->getMatricula(); ?>">
            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>