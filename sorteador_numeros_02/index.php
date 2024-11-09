<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gerador de Números Aleatórios</h1>
    <?php
    
    $min = 1; 
    $max = 100; 

    
    $numeroaleatorio = mt_rand($min, $max);

    echo "<p>O número aleatório gerado foi: <strong>$numeroaleatorio</strong></p>";
    ?>
    <button onclick="javascript:document.location.reload()">Gerar outro</button>

</body>
</html>