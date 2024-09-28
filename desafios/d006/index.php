<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET ['dividendo'] ?? false;
        $div = $_GET ['div'] ?? false;
    ?>
    <header><h1>Dissecando uma divisão</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Dividendo:</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>">
            <label for="div">Divisor:</label>
            <input type="number" name="div" id="iddiv" value="<?=$div?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
        <?php 
            if ($dividendo != false or $div != false) {
                $int = intdiv($dividendo, $div);
                $resto = $dividendo % $div;
                echo "<section>
                    <h1>Estrutura da divisão:</h1>
                        <table class=\"divisao\">
                            <tr>
                                <td>$dividendo</td>
                                <td>$div</td>
                            </tr>
                            <tr>
                                <td>$resto</td>
                                <td>$int</td>
                            </tr>
                        </table>
                </section>";
            }
        ?>
</body>
</html>