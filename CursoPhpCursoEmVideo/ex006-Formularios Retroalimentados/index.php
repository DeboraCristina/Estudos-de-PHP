<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados afim de manter os valores na pagina
        // msm após o envio dos dados
        $num_1 = $_GET["numero_um"]   ?? 0;
        $num_2 = $_GET["numero_dois"] ?? 0;
        $resultado = $num_1 + $num_2;
    ?>
    <header>
        <h1>Somador de Valores</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero_um">Primeiro Numero</label>
            <input type="number" name="numero_um" id="id_numero_um" value="<?=$num_1?>">

            <label for="numero_dois">Segundo Numero</label>
            <input type="number" name="numero_dois" id="id_numero_dois" value="<?=$num_2?>">

            <p class="center"><?=$resultado?></p>
            <input type="submit" value="Somar">
        </form>
    </main>
</body>
</html>