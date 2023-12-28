<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <head>
        <h1>Resultado</h1>
    </head>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem Nome";
            $sobrenome = $_GET["sobrenome"] ?? "Sem Sobrenome";

            echo "<p>Prazer em te conhecer <strong>$nome $sobrenome</strong>!</p>";
            echo "<p>Esse é meu Site</p>";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterios</a></p>
    </main>
</body>
</html>