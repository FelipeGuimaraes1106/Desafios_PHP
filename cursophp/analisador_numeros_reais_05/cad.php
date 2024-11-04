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
        $num = $_GET["num"];
        
        // Formata o número com três casas decimais
        $numero_formatado = number_format($num, 3, '.', '');

        // Divide o número em parte inteira e parte decimal
        list($parte_inteira, $parte_decimal) = explode('.', $numero_formatado);

        echo "Parte inteira: $parte_inteira<br>";
        echo "Parte decimal: $parte_decimal<br>";
    }
    ?>
    <button onclick="window.history.back();">Retornar</button> <!-- Botão para voltar -->
</body>
</html>