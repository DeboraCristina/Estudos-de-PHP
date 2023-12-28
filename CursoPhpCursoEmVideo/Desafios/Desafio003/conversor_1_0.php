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
            const COTACAO = 4.82;
            $real = $_GET["valor"] ?? 0.0;
            $dollar = $real * COTACAO;

            $real = str_replace(".", ",", $real);
            $dollar = str_replace(".", ",", $dollar);

            echo "<p>O valor <em>R$ $real</em> equivale a <strong>US$ $dollar</strong></p>";
            echo "<p><sub>
            <strong><em>Cotação fixa de 4,82 (2023)</em></strong></sub></p>";
        ?>
        
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
