<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="box">

        <h1>
            Bem-vindo à aula de Arrays  <?php echo $_GET["nome"]; ?><br>
        </h1>
        
        <?php
        $nomes = array("Ana", "Bruno", "Carlos", "Diana", "Eduardo");
        echo "O Array contém " .count($nomes). " elementos.<br>";
        for ($i=0; $i < count($nomes); $i++) { 
            echo "O nome na posição " .$i. " é: " .$nomes[$i]. "<br>";
        }
        
        var_dump($nomes);
        
        ?>
    </div>
    <div class="box">

        <H2>Inclua outros nomes na variável nome</H2>
        
        <?php
        if (isset($_GET["nome"]) && $_GET["nome"] != "") {
            $novo_nome = $_GET["nome"];
            array_push($nomes, $novo_nome);
            echo "Nome adicionado: " .$novo_nome. "<br>";
            echo "O Array agora contém " .count($nomes). " elementos.<br>";
            for ($i=0; $i < count($nomes); $i++) { 
                echo "O nome na posição " .$i. " é: " .$nomes[$i]. "<br>";
            }
            var_dump($nomes);
        } else {
            echo "Por favor, insira um nome no campo acima.";
        }
        ?>
    </div>
    <div class="box">

        <h2>Substituindo itens numa lista de arrays</h2>
        
        <?php
        array_splice($nomes,2,0,["Felipe","gustavo","MONICA"]);
        var_export($nomes);
        
        ?>
    
    </div>

</body>

</html>