 <?php
    echo "Bem-vindo ao ex003!";
    $numeros = (int) $_GET["quantidadenumeros"];
    echo "Você quer guardar $numeros números";
?>

<h2>Recebendo os números</h2>

<?php
    for ($i = 1; $i <= $numeros; $i++) {
        $valores[$i] = (int) $_GET["array$i"];
        echo "O número $i é $valores[$i]<br>";
        echo "<input type='hidden' name='array$i' value='$valores[$i]'>";
    }
?>
