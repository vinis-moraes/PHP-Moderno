<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 007</h1>
    <?php 
        $mais = 0;
        $min = 1320;
        $s = $_GET["s"]??1320;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="s">Digite seu salário: </label>
    <input type="number" name="s" id="s" value="<?=$s?>">
    <input type="submit" value="Enviar" id="submit">
    </form>
    <p>Para esse exercício, está sendo considerado o salário mínimo no valor de <strong>R$ 1320,00</strong></p>
    <?php 
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $int = intdiv($s, $min);
       // echo "$int<br>";
        $fra = $s / $min;
        //echo "$fra <br>";
        $mais = $s - ($int*$min);
        //echo "$mais<br>";
        echo "Você recebe ". $int . " vezes o salário mínimo e mais ". numfmt_format_currency($padrao, $mais, 'BRL');
    ?>
</body>
</html>