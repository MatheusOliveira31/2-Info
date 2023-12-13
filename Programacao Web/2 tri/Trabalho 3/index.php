<?php
    session_start();
    require_once('vendor/autoload.php');
    use Embed\Embed;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Repositório de Links</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
</head> 
<body id="body">
    <div id="div0">
        <h1 id="title">Repositório de Links</h1>
    </div>
    <form action="salvarlink.php" method="get">
        <div id="div1">
            <div class="input">
            <input type="text" id="link" name="link" placeholder="Digite o link:">
        </div>
            <div class="btn-div">
            <button type="submit"  value="Adicionar Link" class="btn-top" id="adicionar">Adicionar Link</button>
            <button href="limpar.php" id="apagar" class="btn-top">Apagar todos os links</button>
    </div>
        </div>
    </form>
    <div id="div2">
    <span id="span">Meus links:</span>
    </div>
    <div id="div3">
    <div class='all'>
    <?php
        if (!isset($_SESSION['vetordelinks'])) return;
        foreach ($_SESSION['vetordelinks'] as $link) {
            $link = Embed::create($link);
            echo " <div class='card'>
                <div class='card-imagem'><img src='$link->image' alt='imagem' class='imagens'></div>
                <h5 class='titulo'>$link->title</h5>
                <p>$link->description</p>
                <p class='p_chave'>Palavras-chave: ".implode(', ', $link->tags)."</p>
                <div class='botoes'>
                    <a href='$link->url' target='_blank' class='btn' >Acessar</a>
                    <a href='excluirlink.php?id=$link->url' class='btn'>Excluir</a>
                </div>
            </div>";
        }
    ?>
    </div>
    </div>
</body>
</html>
