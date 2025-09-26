<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex01</title>
</head>
<body>
<h1>Exercício de arrays </h1>  

<?php
    $frutas = ["Maçã", "Banana", "Laranja", "Uva", "Melancia"];

    echo "<h2>Lista de Frutas:</h2>";
    echo "<ul>";
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";
?>
</body>
</html>