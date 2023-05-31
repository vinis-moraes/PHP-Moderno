<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 006</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Exercício 006</h1>
    <?php 
        // Capturando os dados do formulário
        $valor1 = $_GET['v1']??0;
        $valor2 = $_GET['v2']??0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar" id="submit">
        </form>
    </main>
    <h2>Resultado</h2>
    <?php 
        $result = $valor1 + $valor2;
        echo "<p>O resultado da soma entre <strong>". $valor1."</strong> e <strong>".$valor2."</strong> é <strong>".$result."</strong>.</p>";
    ?>
</body>
</html>