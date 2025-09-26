<?php

// 3. Crie um array associativo com informações de 3 alunos (nome, idade e notaFinal).
// Para este exercício, a instrução b pede para adicionar 10 alunos, então já vamos criar a estrutura para eles.

// a - Adicione 10 alunos
$alunos = [
    [
        'nome' => 'Juca',
        'idade' => 27,
        'notaFinal' => 8.5
    ],
    [
        'nome' => 'Ana',
        'idade' => 22,
        'notaFinal' => 9.0
    ],
    [
        'nome' => 'Pedro',
        'idade' => 24,
        'notaFinal' => 7.5
    ],
    [
        'nome' => 'Maria',
        'idade' => 20,
        'notaFinal' => 6.0
    ],
    [
        'nome' => 'Carlos',
        'idade' => 21,
        'notaFinal' => 8.0
    ],
    [
        'nome' => 'Sofia',
        'idade' => 23,
        'notaFinal' => 9.5
    ],
    [
        'nome' => 'João',
        'idade' => 19,
        'notaFinal' => 7.0
    ],
    [
        'nome' => 'Beatriz',
        'idade' => 25,
        'notaFinal' => 8.8
    ],
    [
        'nome' => 'Rafael',
        'idade' => 26,
        'notaFinal' => 6.5
    ],
    [
        'nome' => 'Fernanda',
        'idade' => 28,
        'notaFinal' => 9.2
    ]
];

// Exiba as informações de cada aluno
echo "<h3>Informações dos Alunos:</h3>";
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno['nome'] . "<br>";
    echo "Idade: " . $aluno['idade'] . " anos<br>";
    echo "Nota Final: " . number_format($aluno['notaFinal'], 1, ',', ) . "<br><br>";
}

// b - Calcule e exiba a média das notas de todos os alunos
$somaDasNotas = 0;
foreach ($alunos as $aluno) {
    $somaDasNotas += $aluno['notaFinal'];
}

$totalAlunos = count($alunos);
$media = $somaDasNotas / $totalAlunos;

echo "<h3>Média das Notas:</h3>";
echo "A média das notas de todos os alunos é: " . number_format($media, 2, ',', ) . "<br>";

?>