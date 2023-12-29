<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_nasc = $_REQUEST["ano_nasc"] ?? 0;
        $ano_atual = date("Y");
        $ano_calculo = $_REQUEST["ano_atual"] ?? $ano_atual;

    ?>
    <header>
        <h1>Cálculo de Idade</h1>
        <h2 class="center">Desafio 10</h2>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano_nasc">Ano de Nascimento</label>
            <input type="number" name="ano_nasc" id="ano_nasc"
                value="<?=$ano_nasc?>">

            <label for="ano_atual">Ano para cálculo</label>
            <input type="number" name="ano_atual" id="ano_atual"
                value="<?=$ano_calculo?>">

            <input type="submit" value="Calcular">
        </form>
        <br>
        <section>
            <h1>Resultado</h1>
            <?php 
                $idade = $ano_calculo - $ano_nasc;

                if ($ano_calculo > $ano_atual)
                    $msg_tempo = 'vai ter';
                else
                    $msg_tempo = 'tem';

                echo "<p>Quem nasceu em $ano_nasc $msg_tempo 
                    <strong>$idade anos</strong> em $ano_calculo</p>";
            ?>
        </section>
    </main>
</body>
</html>