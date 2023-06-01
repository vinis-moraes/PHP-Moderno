<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 011</h1>
    <?php 
        $preco1 = $_GET['preco1']??100;
        $aumento = $_GET['aumento']?? 30;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preco1">Digite o preço original do produto em reais: </label>
        <input type="number" name="preco1" id="preco1" value="<?=$preco1?>"> <br>
        <label for="aumento">Qual será o percentual de aumento? (<span id="valor_range"><?=$aumento?>%</span>)</label> <br>
        <input type="range" name="aumento" oninput="getElementById('valor_range').innerHTML = this.value + '%' ;" value="<?=$aumento?>" id="aumento"> <br>
        <input type="submit" value="Enviar" id="submit">
    </form>
    <?php 
        $preco2 = $preco1 + ($aumento / 100) * $preco1;
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        echo "O valor de <strong>". numfmt_format_currency($padrao, $preco1, 'BRL') . "</strong> com $aumento% de acréscimo passa a ser <strong> ". numfmt_format_currency($padrao, $preco2, 'BRL')."</strong>." ;
    ?>
</body>
</html>