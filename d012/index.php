<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 012</h1>
    <?php 
        $s = $_GET['s']??1;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="s">Digite a quantidade de segundos: </label>
        <input type="number" name="s" id="s"> <br>
        <input type="submit" value="Enviar" id="submit">
    </form>
    <h2>Resultado</h2>
    <?php 
        $week = $s / 60 / 60 / 24 / 7;
        $days = ($week - (int)$week)*7; 
        $hours = ($days - (int)$days)*24;
        $minutes = ($hours - (int)$hours)*60;
        $seconds = ($minutes - (int)$minutes)*60;
        
        echo "O valor que você digitou corresponde a: <br>";
        echo (int)$week." semanas<br>";
        echo (int)$days." dias<br>";
        echo (int)$hours." horas<br>";
        echo (int)$minutes." minutos<br>";
        echo (int)$seconds." segundos <br>";
    ?>
</body>
</html>