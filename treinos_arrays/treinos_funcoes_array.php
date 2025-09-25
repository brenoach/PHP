<?php
$b = range (1, 10);  // cria um array com valores de (1 , 10) ou seja: de x até y
$implode = implode(", ", $b);  // transforma o array em string, separando por espaço e vírgula
echo "<h2>Array com range e implode</h2>";
// print_r($b);
echo "<br>$implode";
echo "<h2>Soma de array com array_sum</h2>";
$somab = array_sum($b);  // função que soma os valores do array
echo "<br> Soma de 1 a 10 = $somab";
echo "<br>";

echo "<h2> Mostrar números em ordem invertida </h2>";
$c = [];
$invertido = rsort($b);
var_export($invertido);
var_dump($b);
$implode = implode(", ", $b);
echo "<br>$implode";
echo "<br>";

$a = array($_GET["numero"], $_GET["numero1"], $_GET["numero2"], $_GET["numero3"]);


echo "<br>";
echo "<h2>Soma de array de uma vez só</h2>";
echo array_sum($a);
echo "<br>";
echo "<h2> Soma de array com for </h2>";
$soma = 0;
for ($i = 0; $i < count($a); $i++){
    $soma = $soma + $a[$i];

    echo "<br> Array ($i) recebe  ". $a[$i];
}
echo "<br> Soma de: $a[0] + $a[1] + $a[2] + $a[3] =  $soma";
echo "<h2> Média dos valores </h2>";
echo "<br>" . $soma / count($a) . "<br>";



?>

<a href="index.html">Voltar</a>