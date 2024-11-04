<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS externo -->
</head>
<body>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $reais= $_GET["reias"];
    $dolar= $reais/5.22;
    echo "<p>Voce possui $dolar dolares americanos</p>";
    echo "<p>O Dollar foi definido como 5.22 reias</p>";
    }
    ?>
    <button onclick="window.history.back();">Retornar</button> <!-- Botão para voltar -->
</body>
</html>