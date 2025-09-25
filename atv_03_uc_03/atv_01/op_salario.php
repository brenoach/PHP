<?php

// A) Cálculo do Salário Líquido

// Dados de entrada
$valorHora = 25.00;
$horasTrabalhadas = 160;
$salarioBrutoIsento = 1800.00; // Exemplo de um trabalhador isento
$salarioBrutoTributado = 2500.00; // Exemplo de um trabalhador tributado

// --- Exemplo 1: Trabalhador Isento ---
$salarioBruto1 = $valorHora * $horasTrabalhadas;
$percentualImposto1 = 0.0;
$valorImposto1 = 0.0;

if ($salarioBruto1 > 2000.00) {
    $percentualImposto1 = 0.05;
    $valorImposto1 = $salarioBruto1 * $percentualImposto1;
}

$salarioLiquido1 = $salarioBruto1 - $valorImposto1;

echo "<h3>Cálculo do Salário Líquido (Exemplo 1: Isento)</h3>";
echo "Salário Bruto: R$ " . number_format($salarioBruto1, 2, ',', '.') . "<br>";
echo "Valor Pago em Impostos: R$ " . number_format($valorImposto1, 2, ',', '.') . " (" . ($percentualImposto1 * 100) . "%)<br>";
echo "Salário Líquido Final: R$ " . number_format($salarioLiquido1, 2, ',', '.') . "<br>";
echo "<hr>";


// --- Exemplo 2: Trabalhador Tributado (Simulando um salário bruto de R$ 2500.00) ---
$salarioBruto2 = $salarioBrutoTributado; // Usando o valor de exemplo
$percentualImposto2 = 0.0;
$valorImposto2 = 0.0;

if ($salarioBruto2 > 2000.00) {
    $percentualImposto2 = 0.05;
    $valorImposto2 = $salarioBruto2 * $percentualImposto2;
}

$salarioLiquido2 = $salarioBruto2 - $valorImposto2;

echo "<h3>Cálculo do Salário Líquido (Exemplo 2: Tributado)</h3>";
echo "Salário Bruto: R$ " . number_format($salarioBruto2, 2, ',', '.') . "<br>";
echo "Valor Pago em Impostos: R$ " . number_format($valorImposto2, 2, ',', '.') . " (" . ($percentualImposto2 * 100) . "%)<br>";
echo "Salário Líquido Final: R$ " . number_format($salarioLiquido2, 2, ',', '.') . "<br>";

?>