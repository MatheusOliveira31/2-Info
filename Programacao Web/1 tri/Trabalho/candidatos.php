<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body class="body">
    <div class="header">
            <a href="#default" class="logo">Processo eleitoral 2026</a>
            
            <div class="header-right">
            <a href="index.php">Tela Inicial</a>
            <a href="processoeleitoral.php">Sobre o Processo eleitoral 2026</a>
            <a href="cadastro.php">Cadastre-se</a> 
            <a href="candidatos.php">Vote</a>
        </div>
        </div>
        <form method = "post" action = "votacao.php">
<div class="container">
    <div id="dave">
        <img src="davemustaine.jpg" alt="dave" class="img" id="dave_img">
        <span id="texto_dave">
        1 - Dave Mustaine - PMG
            </span>
        <span id='dave_escondido'>Vocalista e guitarrista do Megadeth
        <button type="submit" class="votar" name = "votar1">Votar</button>
        </span>
            </div>
            <div id="thom">
                <img src="thomyorke.png"   alt="thom" class="img"  id="thom_img">
                <span id="texto_thom">
                2 - Thom Yorke - PRA
                    </span>
                <span id='thom_escondido'>Vocalista do Radiohead
                <button type="submit" class="votar" name = "votar2">Votar</button>
                </span>
            </div>
            <div id="james">
                <img src="jameshetfield.jpg" alt="james" class="img"  id="james_img">
                <span id="texto_james">
                    3 - James Hetfield - PME
                        </span>
                    <span id='james_escondido'>Vocalista e guitarrista do Metallica
                    <button type="submit" class="votar" name = "votar3">Votar</button>
                    </span>
            </div>
            <div id="tyler">
                <img src="tyler.png"   alt="tyler" class="img"  id="tyler_img">
                <span id="texto_tyler">
                    4 - Tyler, The Creator - PTC
                        </span>
                    <span id='tyler_escondido'>Vocalista do Tyler, The Creator
                    <button href="votacao.php" class="votar" name = "votar4">Votar</button>
                    </span>
        </div>
        </div>
        </form> 
        <div class="card">
    <script src="scripts1.js"></script>
</body>
</html>

