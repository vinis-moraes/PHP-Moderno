<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 008</h1>
    <?php 
        $n = $_GET['n']??0;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n1">Digite um número</label>
        <input type="number" name="n" id="n">
        <input type="submit" value="Enviar" id="submit">
    </form>

    <?php 
        $sqrt = $n ** (1/2);
        $cbrt = $n ** (1/3);
        echo "A raíz quadrada de <strong>". $n. "</strong> é <strong>". number_format($sqrt, 3, ',', '.'). "</strong>.<br>" ;
        echo "A raíz cúbica de <strong>" . $n . "</strong> é <strong>". number_format($cbrt, 3, ',', '.') . "</strong>.";
    ?>
</body>
</html>