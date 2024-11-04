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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero = $_POST['numero'];
        $numero_sucessor= $numero +1;
        $numero_antecessor= $numero -1; 
        echo "<h1>Dados recebidos:</h1>";
        echo "Número: " . htmlspecialchars($numero) . "<br>";
        echo "Número Sucessor:".htmlspecialchars($numero_sucessor) ."<br>";
        echo "NúmeroAntecessor:".htmlspecialchars($numero_antecessor) ."<br>";
    }

    ?>
    <button onclick="window.history.back();">Retornar</button> <!-- Botão para voltar -->
</body>
</html>