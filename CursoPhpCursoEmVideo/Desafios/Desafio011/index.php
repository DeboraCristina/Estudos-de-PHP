<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco'] ?? 0;
        $reajuste = $_REQUEST['reajuste'] ?? 50;
    ?>
    <header>
        <h1>Reajuste de preços</h1>
        <h2 class="center">Desafio 11</h2>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto</label>
            <input type="number" name="preco" id="preco"
                value="<?=$preco?>">
            
            <label for="reajuste">Porcentual de Reajuste 
                <span id="label_reajuste"><?=$reajuste?></span>%</label>
            <input type="range" name="reajuste" id="id_reajuste"
                value="<?=$reajuste?>" oninput="atualiza_reajuste()">

            <input type="submit" value="Calcular">
        </form>
        <br>
        <section>
            <h1>Resultado</h1>
            <?php 
                $novo_preco = $preco + ($preco * ($reajuste / 100));
                echo "<p>Os novos dados do Produto:</p>";
                echo "<ul>";
                echo "<li>Preço atual: <strong>R\$$preco</strong></li>";
                echo "<li>Porcentual de Reajuste: 
                    <strong>$reajuste%</strong></li>";
                echo "<li>Novo preço com reajuste aplicado: 
                    <strong>R\$$novo_preco</strong></li>";
                echo "</ul>";
            ?>
        </section>
    </main>

    <script>
        function atualiza_reajuste()
        {
            label_reajuste.innerText = id_reajuste.value;
        }
    </script>
</body>
</html>