<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar Tempo e Timezone com PHP</title>
</head>
<body>
    <h1>
        Exemplo de Tempo e Timezone PHP
    </h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");

        echo "<p>Timezone de São Paulo</p>";

        echo "<p>Hoje é dia " . date("d/M") . "</p>";
        echo "<p>E a hora é " . date("G:i:s T") . "</p>";
    ?>
</body>
</html>
