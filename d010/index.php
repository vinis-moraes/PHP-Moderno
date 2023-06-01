<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 010</h1>
    <?php 
        $ano1 = $_GET['ano1']??0;
        $ano2 = $_GET['ano2']?? date("Y");
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="ano1">Digite em qual ano você nasceu: </label>
        <input type="number" name="ano1" id="ano1" value="<?=$ano1?>"> <br>
        <label for="ano2">Digite o ano o qual você deseja saber qual será sua idade: </label>
        <input type="number" name="ano2" id="ano2" value="<?=$ano2?>"> <br>
        <input type="submit" value="Enviar" id="submit">
    </form>
    <h2>Resultado</h2>
    <?php 
        $idade = $ano2 - $ano1;
        echo "Você terá $idade anos ao fim de $ano2!";
    ?>
</body>
</html>