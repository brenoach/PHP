<?php

$pares = 0;
$impares = 0; // Adicione essas linhas
$numeros = [5,7,8];



foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares = $pares + 1;  
    } else {
        $impares = $impares + 1;  
    }
}

$resultado = "<p>Números digitados: $num1, $num2 e $num3</p>";
$resultado = "<p>Números digitados: $num1, $num2 e $num3</p>";
$resultado .= "<p>Números pares: $pares</p>";
$resultado .= "<p>Números ímpares: $impares</p>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos Números Pares e Ímpares</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <h1>Resultado dos Números Pares e Ímpares</h1>

   <div class="resultado">
    <?php echo $resultado; ?>
</div>

</body>
</html>