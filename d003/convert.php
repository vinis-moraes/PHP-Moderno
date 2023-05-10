<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Desafio 003</h1>
    <?php 
        // Bibilioteca de internacionalização

        $r = $_GET["reais"];
        $usd = $r / 5.22;
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        echo "O valor ". numfmt_format_currency($padrao, $r, 'BRL'). " corresponde a " .numfmt_format_currency($padrao, $usd, 'USD').'.';
    ?>
</body>
</html>