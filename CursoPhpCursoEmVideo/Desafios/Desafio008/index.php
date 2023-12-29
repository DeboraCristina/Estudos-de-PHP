<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos de Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor = $_REQUEST['numero'] ?? 0;
    ?>
    <header>
        <h1>Cálculos de Raizes</h1>
        <h2 class="center">Desafio 08</h2>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$valor?>">

            <input type="submit" value="Calcular">
        </form>
        <br>
        <section>
            <h1>Resultado</h1>
            <?php 
                $raiz_quadrada = sqrt($valor);
                $raiz_cubica = ($valor) ** (1/3);

                echo "<ul>";
                echo "<li>Raiz Quadrada de <em>$valor</em>: 
                    <strong>$raiz_quadrada</strong></li>";
                echo "<li>Raiz Cúbica de <em>$valor</em>: 
                    <strong>$raiz_cubica</strong></li>";
                echo "</ul>";
            ?>
        </section>
    </main>
</body>
</html>