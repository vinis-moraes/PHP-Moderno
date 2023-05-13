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


        $inic = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inic.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotação = $dados["value"][0]["cotacaoCompra"];

        $r = $_GET["reais"];
        $usd = $r / $cotação;
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        echo "O valor ". numfmt_format_currency($padrao, $r, 'BRL'). " corresponde a " .numfmt_format_currency($padrao, $usd, 'USD').'.';
    ?>
</body>
</html>