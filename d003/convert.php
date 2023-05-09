<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 003</h1>
    <?php 
        $r = $_GET["reais"];
        $usd = $r / 5.22;
        echo "<p>O valor R$$r corresponde a USD$usd</p>"
    ?>
</body>
</html>