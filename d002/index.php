<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 002</h1>
    <?php 
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);
        echo "<p>O número aleatório gerado foi $num</p>"
    ?>

    <button onclick="javascript:document.location.reload()">
        &#x1F504 Recarregar
    </button>
</body>
</html>