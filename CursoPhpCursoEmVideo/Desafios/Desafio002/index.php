<!--
    Desafio 2

    Sorteador de números aleatórios, entre 0 e 100.
    > Mostrar um número aleatório entre 0 e 100
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando número aleatório entre 0 e 100...</p>
        <?php 
            $numero = rand(0, 100);
            echo "<p>O valor gerado foi <strong>$numero</strong></p>";
        ?>
        <button onclick="javascript:history.go(0)">
            &#x1F504 Gerar outro número</button>
    </main>
</body>
</html>