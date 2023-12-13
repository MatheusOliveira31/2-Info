<link rel="stylesheet" href="style.css">
<div id="php">
<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$login = $_POST['login'];
$senha = $_POST['senha'];
echo "<h1 id='php_H1' >Sua informações;</h1>";
echo "<ul>";
echo "<li class='phpClass'>$nome</li>";
echo "<li class='phpClass'>$cpf</li>";
echo "<li class='phpClass'>$login</li>";
echo "<li class='phpClass'>$senha</li>";
echo "</ul>";
?>
<a href="index.html" id="phpVoltar">Voltar a página </a>
</div>