<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Disciplina</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
    ?>
    <h1>Formulário de Disciplina</h1>
    <a href="disciplinas.php">Voltar para Listagem</a>
    <form action="salvarDisciplina.php" method="POST">
        <fieldset>
            <legend>Dados da Disciplina</legend>
            <input type="hidden" name="id" value="<?php echo $disciplina->getId() ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da Disciplina" value="<?php echo $disciplina->getNome(); ?>">
            <br>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>