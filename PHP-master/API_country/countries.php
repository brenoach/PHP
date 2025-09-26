<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="" id="name">Nome do País:</label><br>
        <input type="text" name="name">
        <button type="submit">Enviar</button>

    </form>
    <?php
    if (isset($_GET["name"])) {
        $nome = $_GET["name"];
        echo http:restcountries.com/v3.1/name/{$nome};
    }
    ?>

 


 

</body>

</html>

<!-- Read-me --
 Consumo da API Restcontries 

1 - Definir objetivo: o que se vai buscar.  
 (dados de entrada e dados de saída)
 
2 -  Construir o front-end 

3 - Construir o backend:
   - Tratar dados de entrada;
   - Consumir a APi;
   - mostrar dados na tela. 

-->

<!-- Resolução 
 Fazer um formulário para buscar um país;
 Fazer com que o php retorne nele mesmo;
 Fazer um check no formulário;
 Refinar o envio dos dados pelo formuário;

-->