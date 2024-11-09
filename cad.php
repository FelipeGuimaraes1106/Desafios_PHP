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
        echo"<p> Aqui estão algumas funções que criei usando php.</p>";
    } else {    
        echo "<h2>Método de requisição inválido.</h2>";
    }
    ?>
    <button onclick="window.location.href='http://localhost/cursophp/num_sucessor_antecessor_01'">Número Antecessor e sucessor</button>
    <button onclick="window.location.href='http://localhost/cursophp/analisador_numeros_reais_05'">Analisador de Números Reais</button>
    <button onclick="window.location.href='http://localhost/cursophp/sorteador_numeros_02'">Sorteador de Números</button>
    <button onclick="window.location.href='http://localhost/cursophp/convertor_moedas_03'">Conversor de Moedas versão 1</button>
    <button onclick="window.location.href='http://localhost/cursophp/API_convertor_moedas_04'">Conversor de Moedas versão 2.0</button>


    <button onclick="window.history.back();">Retornar</button> <!-- Botão para voltar -->
</body>
</html>