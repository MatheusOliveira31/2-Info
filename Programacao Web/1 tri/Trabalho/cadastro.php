<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css1.css">
    <title>Document</title>
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
    <div class="card">
    <div class="card-header">
        Formulário de Cadastro
  </div>
  <div class="card-body">
 <form method="post" action="candidatos.php" onsubmit="return verificar()" id="form">
            <label for="nome"> Informe seu nome completo:
                <input type="text" id="nome" name="nome" > <br>
            </label>
            <label for="rg"> Informe o seu RG:
                <input type="number" id="rg" name="rg"> <br>
            </label>
            <label for="cpf"> Informe o seu CPF:
                <input type="number" id="cpf" name="cpf"> <br>
            </label>
            <label for="sexo"> Informe o seu sexo:
                <select name="sexo" id="sexo">
                        <option value="informarsexo"></option>
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                        <option value="o">Outro</option>
                </select> <br>


            </label>
            <label for="etnia"> Informe a sua etnia:
                <select name="etnia" id="etnia">
                    <option value="informaretnia"></option>
                    <option value="Branco">Branco</option>
                    <option value="Negro">Negro</option>
                    <option value="Indigena">Indígena</option>
            </select> <br> <!-- vou fazer em radio provávelmente-->


            </label>
            <label for="uniaofederativa"> Identifique  sua união federativa:
                <select name="uniaofederativa" id="uniaofederativa">
                    <option value="informaruniao"></option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>            
                    <option value="TO">TO</option>
                    <option value="PA">PA</option>
                    <option value="AC">AC</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="AL">AL</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="MA">MA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RN">RN</option>
                    <option value="SE">SE</option>
                    <option value="DF">DF</option>
                    <option value="GO">GO</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="ES">ES</option>
                    <option value="MG">MG</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</option>
                    <option value="PR">PR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
            </select> <br> <!-- vou fazer em radio provávelmente-->


            </label>
            <label for="telefone"> Informe o seu telefone:
                <input type="number" id="telefone" name="telefone"> <br>
            </label>
            <label for="email"> Informe o seu email:
                <input type="text" id="email" name="email"> <br>
            </label>
            <button type="submit" id="botao">Enviar</button>
            <script src="scripts2.js"></script>

        </form>
        
        </div>
    </div>
</body>
</html>
