<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_REQUEST['dividendo'] ?? 0;
        $divisor = $_REQUEST['divisor'] ?? 0;
    ?>
    <header>
        <h1>Anatomia de uma divisão</h1>
        <h2 class="center">Desafio 06</h2>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="id_dividendo" 
                value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="id_divisor"
                value="<?=$divisor?>">

            <input type="submit" value="Analizar">
        </form>
        <br>
        <section>
            <h1>Estrutura da Divisão</h1>
            <?php 
                if ($dividendo == 0 || $divisor == 0)
                {
                    $resultado = 'N/A';
                    $resto = 'N/A';
                }
                else
                {
                    $resultado = (int) ($dividendo / $divisor);
                    $resto = $dividendo % $divisor;
                }
                print "<ul>";
                    print "<li>Dividendo: $dividendo</li>";
                    print "<li>Divisor: $divisor</li>";
                    print "<li>Resultado: $resultado</li>";
                    print "<li>Resto da Divisão: $resto</li>";
                print "</ul>";
            ?>
        </section>
    </main>
</body>
</html>