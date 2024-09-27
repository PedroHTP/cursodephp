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
        $valor1 = $_POST['v1'] ?? 0;
        $valor2 = $_POST['v2'] ?? 0;
    ?>
    <main>
        <h1>A soma de dois valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2"  value="<?=$valor2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
        <?php 
            if ($valor1!=0 or $valor2!=0) {
                $soma = $valor1 + $valor2;
                echo "<section>
                    <h2>Resultado da soma</h2>
                    <p>O soma de $valor1 + $valor2 é igual a $soma.</p>
                </section>";
            } 
        ?>
</body>
</html>