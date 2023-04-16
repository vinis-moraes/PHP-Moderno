<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 002</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Exercício 002</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia ". date("d/M/Y");
        echo "<br>E a hora atual é ". date("G:i T");
    ?>
</body>
</html>