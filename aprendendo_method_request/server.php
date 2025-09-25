<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="numero">Nome</label ><br> 
        <input type="number" id="numero" value="Ex. '123' "><br><br>
        <input type="submit" value="Submit">
    </form>
    <!-- #region -->
     $a = trim(GET_"numero");

</body>
</html>