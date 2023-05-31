<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $n1 = $_GET['n1']??0;
        $n2 = $_GET['n2']??0;
    ?>
    <h1>Desafio 006</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n1">Digite o primeiro número: </label>
        <input type="number" name="n1" id="n1">
        <label for="n2">Digite o segundo número: </label>
        <input type="number" name="n2" id="n2">
        <input type="submit" value="Enviar" id="submit">
    </form>
    <?php 
        $div = intdiv($n1, $n2);
        $res = $n1 % $n2;

        echo "Na divisão entre <strong>". $n1 . "</strong> e <strong>". $n2 . "</strong>, o resultado é <strong>". $div . "</strong> e o resto é <strong>". $res . "</strong>.";
    ?>
</body>
</html>