<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado de soma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_POST['v1'] ?? false;
        $valor2 = $_POST['v2'] ?? false;
    ?>
    <main>
        <h1>A soma de dois valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$valor1?>" step="any">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2"  value="<?=$valor2?>"  step="any">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        if ($valor1 != false or $valor2 != false) {
            $soma = $valor1 + $valor2;
            $decimal1 = substr(strpbrk($valor1, '.'), 1);
            $cont1 = iconv_strlen($decimal1);
            $decimal2 = substr(strpbrk($valor2, '.'), 1);
            $cont2 = iconv_strlen($decimal2);
                if ($cont1 > $cont2) {
                    $contr = $cont1;
                } else {
                    $contr = $cont2;
                }
            echo "<section>
                <h2>Resultado da soma</h2>
                <p>A soma de " . number_format($valor1, $cont1, ",", ".") . " + " . number_format($valor2, $cont2, ",", ".") . " é igual a " . number_format($soma, $contr, ",", ".") . "</p>
            </section>";
        }
    ?>
</body>
</html>