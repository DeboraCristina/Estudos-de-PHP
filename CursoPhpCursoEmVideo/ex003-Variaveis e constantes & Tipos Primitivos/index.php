<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes & Tipos Primitivos</title>
</head>
<body>
    <h1>Variaveis e Constantes & Tipos Primitivos</h1>
    <h2>Tipos escalares</h2>
    <?php 
    $nome = "Debora";      #String
    $sobrenome = "Silva";  #String
    $idade = 20;           #Int
    $casado = false;       #bool
    $peso = 50.6;          #float ou double

    $casado = (int) $casado;
    echo "<p>Olá, $nome $sobrenome!</p>";
    echo "<p>Dados:</p>";
    echo "<p>* idade: $idade</p>";
    // pro php o bool 'false' é vazio e 'true' é não vazio.
    echo "<p>* é casado: $casado</p>";
    echo "<p>* peso: $peso</p>";
    ?>
    <h2>Tipos Compostos</h2>
    <?php 
    echo "<h3>Array</h3>";
    $vetor = [5, 8.4, "7", true];
    var_dump($vetor);
    
    echo "<h3>Objeto</h3>";
    class Pessoa {}
    $p = new Pessoa;
    var_dump($p);
    ?>
</body>
</html>