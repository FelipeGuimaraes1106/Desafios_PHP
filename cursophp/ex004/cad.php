<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Captura os valores enviados pelo formulário
        $nome = $_GET['nome'];
        $sobrenome = $_GET['sobrenome'];

        echo "<h1>Prazer, " . htmlspecialchars($nome) . " " . htmlspecialchars($sobrenome) . "!</h1>";
        echo "<p>Este é o meu site.</p>";
    } else {    
        echo "<h2>Método de requisição inválido.</h2>";
    }
    ?>
    
    <button onclick="window.history.back();">Retornar</button> <!-- Botão para voltar -->
</body>
</html>