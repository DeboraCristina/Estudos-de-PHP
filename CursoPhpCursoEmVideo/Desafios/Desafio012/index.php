<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos_base = $_REQUEST['segundos'] ?? 0;
    ?>
    <header>
        <h1>Calculadora de Tempo</h1>
        <h2 class="center">Desafio 12</h2>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Tempo em Segundos</label>
            <input type="number" name="segundos" id="segundos"
                value="<?=$segundos_base?>">

            <input type="submit" value="Calcular">
        </form>
        <br>
        <section>
            <h1>Resultado</h1>
            <?php 
            $Semanas = (int) (((($segundos_base / 60) / 60) / 24) / 7);
            $Dias =  ( (int) ((($segundos_base / 60) / 60) / 24) % 7);
            $Horas = ( (int) (($segundos_base / 60) / 60) % 24);
            $Minutos = (int) ($segundos_base / 60)%60;
            $Segundos = $segundos_base % 60;

            time();

            echo "<ul>";
            echo    "<li>$Semanas Semanas</li>";
            echo    "<li>$Dias Dias</li>";
            echo    "<li>$Horas Horas</li>";
            echo    "<li>$Minutos Minutos</li>";
            echo    "<li>$Segundos Segundos</li>";
            echo "</ul>";
            ?>
        </section>
    </main>
</body>
</html>
