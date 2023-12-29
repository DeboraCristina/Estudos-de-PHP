<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $val_1 =   $_REQUEST['val_1'] ?? 0;
        $val_2 =   $_REQUEST['val_2'] ?? 0;
        $peso_1 = $_REQUEST['peso_1'] ?? 1;
        $peso_2 = $_REQUEST['peso_2'] ?? 1;
    ?>
    <header>
        <h1>Cálculo de Médias</h1>
        <h2 class="center">Desafio 09</h2>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="val_1">1º Valor</label>
            <input type="number" name="val_1" id="val_1"
                value="<?=$val_1?>">

            <label for="peso_1">1º Peso</label>
            <input type="number" name="peso_1" id="peso_1"
                value="<?=$peso_1?>">

            <label for="val_2">2º Valor</label>
            <input type="number" name="val_2" id="val_2"
                value="<?=$val_2?>">

            <label for="peso_2">2º Peso</label>
            <input type="number" name="peso_2" id="peso_2"
                value="<?=$peso_2?>">

            <input type="submit" value="Calcular">
        </form>
        <br>
        <section>
            <h1>Resultado</h1>
            <?php 
            $media_simples = ($val_1 + $val_2) / 2;
            $media_ponderada = (($val_1 * $peso_1) + ($val_2 * $peso_2)) / ($peso_1 + $peso_2);
            $media_ponderada = number_format($media_ponderada, 2, ',', '.');

            echo "<ul>";
            echo "<li><strong>Média aritmética simples</strong> dos valores: $media_simples</li>";
            echo "<li><strong>Média ponderada</strong> dos valores com os pesos 
            <em>$peso_1</em> e <em>$peso_2</em> : $media_ponderada</li>";
            echo "</ul>";
            ?>
            
        </section>
    </main>
</body>
</html>