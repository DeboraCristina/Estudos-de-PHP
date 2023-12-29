<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_REQUEST['salario'] ?? 0;
    ?>
    <header>
        <h1>Cálculo de Salário</h1>
        <h2 class="center">Desafio 07</h2>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="salario"
                value="<?=$salario?>">
            <p><sub>
                <em>Salário de 2024 <strong>R$1.412,00</strong></em>
            </sub></p>
            <input type="submit" value="Calcular">
        </form>
        <br>
        <section>
            <h1>Resultado Final</h1>
            <?php 
                const SALARIO_MINIMO = 1412;
                $qnt_salario = (int) ($salario / SALARIO_MINIMO);
                $sobra = ($salario / SALARIO_MINIMO);

                $sobra = number_format($sobra, 2, ',', '.');
                echo "<p>Seguendo o salário informado:</p>";
                echo "<p>Cabem <strong>$qnt_salario</strong> ";
                echo "salários mínimos + <u><em>R$ $sobra</em></u></p>";
            ?>
        </section>
    </main>
</body>
</html>