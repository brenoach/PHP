<?php

// 1. Crie um array com os números de 1 a 10
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<h3>a) Exibir todos os números do array:</h3>";
echo "Números: ";
print_r($numeros); // print_r é útil para exibir o conteúdo de arrays de forma legível.

echo "<h3>b) Calcular e exibir a soma de todos os números:</h3>";
$soma = array_sum($numeros); // A função array_sum() facilita o cálculo da soma.
echo "A soma dos números é: " . $soma;

echo "<h3>c) Inverter a ordem dos elementos e exibir o resultado:</h3>";
$numeros_invertidos = array_reverse($numeros); // array_reverse() inverte a ordem do array.
echo "Array com a ordem invertida: ";
print_r($numeros_invertidos);

?>