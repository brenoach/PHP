<?php

// a - Estrutura para os dados dos produtos
// Um array de arrays, onde cada array interno representa um produto.
$produtos = [];

// b - Adicionar 05 produtos
$produtos[] = [
    'nome' => 'TV',
    'preco' => 5600.00,
    'qtd' => 8
];

$produtos[] = [
    'nome' => 'Smartphone',
    'preco' => 2500.00,
    'qtd' => 15
];

$produtos[] = [
    'nome' => 'Notebook',
    'preco' => 7800.00,
    'qtd' => 5
];

$produtos[] = [
    'nome' => 'Geladeira',
    'preco' => 3200.00,
    'qtd' => 12
];

$produtos[] = [
    'nome' => 'Micro-ondas',
    'preco' => 850.00,
    'qtd' => 20
];

// Exibir as informações dos produtos de forma formatada
echo "<h3>Informações dos Produtos (Preços Originais):</h3>";
foreach ($produtos as $produto) {
    echo "Produto: " . $produto['nome'] . "<br>";
    echo "Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
    echo "Qtd: " . $produto['qtd'] . "<br><br>";
}

// c - Atualizar o preço com desconto de 10%
foreach ($produtos as &$produto) {
    $desconto = $produto['preco'] * 0.10; // 10% de desconto
    $produto['preco'] -= $desconto; // Atualiza o preço
}

// Exibir as informações dos produtos com desconto
echo "<h3>Informações dos Produtos (Preços com Desconto de 10%):</h3>";
foreach ($produtos as $produto) {
    echo "Produto: " . $produto['nome'] . "<br>";
    echo "Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
    echo "Qtd: " . $produto['qtd'] . "<br><br>";
}

?>