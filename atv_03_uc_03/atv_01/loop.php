<?php

// B) Operações com Loop (de 1 a 10)

// Dados de entrada
$numeroBase = 6;
$operacao = 'Adicao'; // Escolha: 'Adicao' ou 'Subtracao'

echo "<h3>Operações com o número $numeroBase ($operacao)</h3>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = 0;
    $simbolo = '';

    if ($operacao == 'Adicao') {
        $resultado = $numeroBase + $i;
        $simbolo = '+';
    } elseif ($operacao == 'Subtracao') {
        $resultado = $numeroBase - $i;
        $simbolo = '-';
    } else {
        echo "Operação inválida!";
        break; // Sai do loop se a operação for inválida
    }

    echo "$numeroBase $simbolo $i = $resultado<br>";
}

?>