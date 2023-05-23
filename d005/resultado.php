<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 005</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 005</h1>
    <?php 
        echo "Analisando...";
        $num = $_GET["n"] ?? 0;

        echo "<p>O número <strong>". number_format($num, 3, ",", ".")."</strong>:</p>";

        $int = (int)$num;
        echo "<ul><li>A parte inteira é <strong>".number_format($int, 0, ",", ".")."</strong>;";
        $fra = $num - $int;
        echo "<li>A parte fracionária é <strong>".number_format($fra, 3, ",", ".")."<strong>;";
    ?>
</body>
</html>