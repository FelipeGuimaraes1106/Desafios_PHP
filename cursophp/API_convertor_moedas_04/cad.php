<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado da Conversão</h1>
    </header>
    <section>
        <pre>
        <?php
        if (isset($_GET['reais'])) {
            $valorReais = (float) $_GET['reais'];

            // URL da API do Banco Central para a cotação do dólar
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2711-01-2024%27&@dataFinalCotacao=%2711-04-2024%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // Verifica se a API respondeu corretamente
            $conteudo = file_get_contents($url);
            if ($conteudo !== false) {
                $dados = json_decode($conteudo, true);
                
                if (isset($dados['value']) && count($dados['value']) > 0) {
                    $cotacao = $dados['value'][0]['cotacaoCompra'];
                    $valorDolar = $valorReais / $cotacao;

                    echo "Valor em Reais: R$ " . number_format($valorReais, 2, ',', '.') . "<br>";
                    echo "Cotação do Dólar: R$ " . number_format($cotacao, 2, ',', '.') . "<br>";
                    echo "Valor em Dólares: US$ " . number_format($valorDolar, 2, ',', '.');
                } else {
                    echo "Erro ao obter a cotação. Tente novamente mais tarde.";
                }
            } else {
                echo "Erro ao acessar a API.";
            }
        } else {
            echo "Nenhum valor em reais foi informado.";
        }
        ?>
        </pre>
        <button onclick="window.history.back();">Retornar</button>
    </section>
</body>
</html>