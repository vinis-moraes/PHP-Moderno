<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 009</h1>
    <?php 
        $n1 = $_GET['n1']??0;
        $n2 = $_GET['n2']??0;
        $p1 = $_GET['p1']??1;
        $p2 = $_GET['p2']??1;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n1">Digite o primeiro valor: </label>
        <input type="number" name="n1" id="n1" value="<?=$n1?>"> <br>
        <label for="p1">Digite o peso do primeiro valor: </label>
        <input type="number" name="p1" id="p1" value="<?=$p1?>"> <br>
        <label for="n2">Digite o segundo valor: </label>
        <input type="number" name="n2" id="n2" value="<?=$n2?>"> <br>
        <label for="p2">Digite o peso do segundo valor: </label>
        <input type="number" name="p2" id="p2" value="<?=$p2?>"> <br>
        <input type="submit" value="Enviar" id="submit">

    </form>
    <h2>Resultado</h2>
    <?php 
        $ms = ($n1 + $n2) / 2;
        echo "A média aritmética simples entre $n1 e $n2 é ".number_format($ms, 2, ",", ".").". <br>";
        $mp = (($p1 * $n1) + ($p2 * $n2)) / ($p1 + $p2);
        echo "A média aritmética ponderada entre $n1 valendo $p1 e $n2 valendo $p2 é ". number_format($mp, 2, ",", ".") . "."; 
    ?>
</body>
</html>