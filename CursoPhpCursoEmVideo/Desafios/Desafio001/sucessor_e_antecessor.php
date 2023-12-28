<!-- 
    Desafio 1
    
    Sucessor e Antecessor
    > Receber um valor númerico e mostrar 
    seu sucessor e antecessor
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
            $numero_base = $_GET["numero"] ?? 0;
            $sucessor = $numero_base - 1;
            $antecessor = $numero_base + 1;

            echo "<p>O numero escolhido foi <strong>$numero_base</strong></p>";
            echo "<p><em>O seu sucessor é $sucessor</em></p>";
            echo "<p><em>O seu antecessor é $antecessor</em></p>";
        ?>
        
        
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>