<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hello World </title>
    <link rel="stylesheet" href="./_css/estilo.css">
</head>
<body>
    <div>

        <?php
        echo "";
        print " This is a test page.<br/>";
        $idade = 42; $anoatual = 2025;
        $anonascimento = $anoatual - $idade;
        printf("A idade da pessoal é %s e pelo ano atual ela nasceu em %s", $anoatual, $anonascimento);       
        ?>
    </div>
</body>
</html>