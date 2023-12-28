<!--
    Desafio 3

    Conversor de Moedas simples.
    > Receber um valor em R$ (0,00) e converter para US$ (cotação fixa de 4,82)
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $data_hoje = date("m/d/Y");
            $data_inicio = date("m/d/Y", strtotime("-7 days"));;

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $data_inicio . '\'&@dataFinalCotacao=\'' . $data_hoje . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_GET["valor"] ?? 0.0;
            $dollar = $real * $cotacao;

            $real = str_replace(".", ",", $real);
            $dollar = str_replace(".", ",", $dollar);

            echo "<p>O valor <em>R$ $real</em> equivale a <strong>US$ $dollar</strong></p>";
            echo "<p><sub>
            <strong><em>Cotação de $cotacao </em></strong>($data_hoje)</sub></p>";
        ?>
        
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
