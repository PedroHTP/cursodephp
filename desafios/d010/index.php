<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $atual = date('Y');
        $nasce = $_GET ['nasce'] ?? false;
        $ano = $_GET ['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calcurando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasce">Em que ano você nasceu?</label>
            <input type="number" name="nasce" id="idnasce" value="<?=$nasce?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="idano" value="<?=$ano?>">
            <input type="submit" value="Calcular minha idade">
        </form>
    </main>
    <?php 
        if ($nasce != false and $nasce < $ano) {
            $idade = $ano - $nasce;
            echo "
                <section>
                    <h1>Resultado</h1>
                    <p>Quem nasceu em ". $nasce ." vai ter <strong>" . $idade . " ano";
                if ($idade > 1) {
                    echo"s";
                }    
            echo "</strong> em " . $ano . "</p></section>
            ";
        }
    ?>
</body>

</html>