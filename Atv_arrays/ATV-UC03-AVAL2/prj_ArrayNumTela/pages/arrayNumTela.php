 
<!-- B) Criar um algoritmo que receba 10 números e exiba
todos eles na tela. Use um array de números para auxiliar
a executar o algoritmo.
 
C) Criar um algoritmo que receba 10 números e exiba
todos eles na tela, mostrando quantos são pares e 
quantos são ímpares. Use um array de números para auxiliar
a executar o algoritmo.  -->


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Números</h1>
    
    <ul>
<?php
// Array com 10 números
$arrayNumTela = [5, 12, 7, 20, 3, 15, 8, 9, 2, 11];

// Percorre o array e exibe cada número
foreach ($arrayNumTela as $index => $numero) {
    echo "Posição $index = $numero <br> " ;
    $modulo = $numero % 2;
    if ($modulo == 0) {
        $pares[] = $numero;
        
    } else {
        $impares[] = $numero;
        
    }
    
}

echo count($pares) . " números pares <br>";
echo count($impares) . " números ímpares <br>";
?>
        
</body>
</html>



