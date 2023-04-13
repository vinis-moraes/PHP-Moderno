<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Interação com formulários</h1>
    </header>
    <main>
        <h2>Resultado dos processamentos</h2>
        <?php 
        $nome = $_GET["nome"] ?? "Usuário";
        $sobrenome = $_REQUEST["sobrenome"] ?? "Desconhecido";
        echo "<h2>Bem vindo, $nome $sobrenome!</h2>"

        ?>
    </main>
    <footer><p>Site criado por <a href="https://vinis-moraes.github.io" target="_blank">Vini Moraes</a></p></footer>
</body>
</html>