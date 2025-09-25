<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>

        <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "purple", "b" => "orange");
        $a3 = array_splice($a1, 1, 2, $a2);
        print_r($a1);
        var_dump($a1);
        var_dump($a2);
        var_dump($a3);



        $a = array("red", "green", "blue", "yellow", "brown");
        print_r(array_slice($a, 2));

        print_r(array_slice($a, 3));


        $a = array("a" => "red", "b" => "green");
        array_unshift($a, "blue");
        print_r($a);
        ?>
</pre>
</body>

</html>