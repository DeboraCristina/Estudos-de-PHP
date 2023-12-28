<!--
    Desafio 5

    Analisar um número real
    > Receber um número real e mostra:
    > - Parte inteira do número
    > - Parte "fracionária" (decimal)
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
            $numero = $_GET["numero"] ?? 0.0;
            $parte_inteira = (int) $numero;
            $parte_decimal = $numero - $parte_inteira;

            print("<p>De acordo com o número <em>". 
                number_format($numero, 2, ",", ".") ."</em>:</p>");
            print("<p>* A parte inteira é <strong><em>\"". 
                number_format($parte_inteira, 0, ",", ".")
                ."\"</em></strong></p>");
            print("<p>* Aparte decimal é <strong><em>\"".
                number_format($parte_decimal, 2, ",", ".")."\"</em></strong></p>");
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
