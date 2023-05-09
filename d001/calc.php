<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 001</h1>
    <?php 
    $n = $_GET["num"];
    $n_me = $n - 1;
    $n_ma = $n + 1;
    echo "<p>O número escolhido foi $n. Seu sucessor é $n_ma e seu antecessor é $n_me.</p>"
    ?>
</body>
</html>