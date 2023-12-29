<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <header>
        <h1>Caixa Eletrônico</h1>
        <h2 class="center">Desafio 13</h2>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor do saque?</label>
            <input type="number" name="saque" id="saque" step="5"
                value="<?=$saque?>">
            
            <input type="submit" value="Sacar">
        </form>
        <br>
        <section>
            <h2 class="center">Resultado do Saque</h2>
            <?php 
                $val_100 = (int) ($saque / 100);
                $saque = ($saque % 100);
                $val_50 =  (int) ($saque /  50);
                $saque = ($saque % 50);
                $val_10 =  (int) ($saque /  10);
                $saque = ($saque % 10);
                $val_5 =   (int) ($saque /   5);
            ?>
            <div class="horizontal">
                <div><strong>R$100</strong>x<?=$val_100?></div>
                <div><strong>R$50</strong>x<?=$val_50?></div>
                <div><strong>R$10</strong>x<?=$val_10?></div>
                <div><strong>R$5</strong>x<?=$val_5?></div>
            </div>
        </section>
    </main>
</body>
</html>