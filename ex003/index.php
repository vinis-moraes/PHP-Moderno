<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 003</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Tipos primitivos em PHP</h1>
    <?php 
    // 0x == hexadecimal / 0b == binário / 0 == octal
        /*$num = 9;
        echo $num;

        $v = "true";
        echo "<br>";
        var_dump($v);*/

        $num = (int) 3e2;
        echo "O valor é $num";
        var_dump($num);
    ?>
</body>
</html>