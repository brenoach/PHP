 <?php
       $quantidadenumeros = (int) $_GET["quantidadenumeros"];
       echo "Você quer guardar $quantidadenumeros números!";

       

       if ($quantidadenumeros > 0) {
           echo "<form action='ex002.php' method='get'>";
           for ($contador = 1; $contador <= $quantidadenumeros; $contador++) {
                echo "<input type='number' name='array$contador' placeholder='$contador º número'><br>";echo "<input type='hidden' name='numero' value='$quantidadenumeros'>";
           }
           echo "<input type='hidden' name='numero' value='$quantidadenumeros'>";
           echo "<input type='submit' value='Enviar Números'>";
           echo "</form>";
       }
           
       else{
           echo "<p>Por favor, insira um número válido maior que zero.</p>";
       }
      
    ?>