<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Receber 10 Números</title>
</head>
<body>
    <h1>Digite 10 números</h1>
    <form method="post">
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<input type='number' name='num[]' placeholder='Número $i' required><br>";
            }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num"])) {
        $numeros = $_POST["num"];
        echo "<h2>Números digitados:</h2>";
        echo "<ul>";
        foreach ($numeros as $numero) {
            echo "<li>$numero</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>