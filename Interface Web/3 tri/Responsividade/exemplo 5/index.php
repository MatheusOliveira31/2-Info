<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Responsividade</title>
    <style>
          <?php // já que é pro celular voce pÔe um grid com uma coluna só,pra ter mais espaço pro texto
          
        ?>
        .container{
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: repeat(8,150px);
        background-color: green;
        }
        .item{
            background-color: gray;
            border: 1px dotted black;
        }

        @media(min-width:600px){
            .container {
                grid-template-columns: repeat(2,1fr);
                grid-template-rows: repeat(4,150px);
            }
        }
        @media(min-width:900px){
            .container {
                grid-template-columns: repeat(3,1fr);
                grid-template-rows: repeat(4,150px);
            }
        }
        @media(min-width:1200px){
            .container {
                grid-template-columns: repeat(4,1fr);
                grid-template-rows: repeat(2n,150px);
                
            }
        }
    </style>
</head>
<body>
    <section class="container">
        <div class="item">Item 1</div>
        <div class="item">Item 2</div>
        <div class="item">Item 3</div>
        <div class="item">Item 4</div>
        <div class="item">Item 5</div>
        <div class="item">Item 6</div>
        <div class="item">Item 7</div>
        <div class="item">Item 8</div>
    </section>
</body>
</html>