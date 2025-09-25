<?php
    $frutas = ["Maçã", "Banana", "Melancia", "Laranja", "Manga", "Uva"];

    // Filtrar frutas que começam com 'M'
    $frutasComM = array_filter($frutas, function($fruta) {
        return strpos($fruta, 'M') === 0;
    });

    echo "<h2>Frutas que começam com 'M':</h2>";
    echo "<ul>";
    foreach ($frutasComM as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";
?>  