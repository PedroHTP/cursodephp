<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $salario = $_GET['salario'] ?? false;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idsalario" value="<?= $salario ?>" step="0.01">
            <input type="submit" value="Calcular">
            <?php
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            const MSALARIO = 1412.00;
            print "<p>Considerando o salário mínimo de " . numfmt_format_currency($padrao, MSALARIO, "BRL") . " </p>";
            ?>
        </form>
    </main>
    <?php

    if ($salario >= MSALARIO) {
        $isalario = intdiv($salario, MSALARIO);
        $resto = $salario % MSALARIO;
        print
            "<section>
                    <h2>Resultado Final</h2>
                    <p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>" . $isalario;
        if ($isalario > 1) {
            print " salários mínimos</strong>";
        } else {
            print " salário mínimo</strong>";
        }
        if ($resto > 0) {
            echo " + " . numfmt_format_currency($padrao, $resto, "BRL");
        }
        print ".</p></section>";
    } else if ($salario != false) {
        $porsalario = round(($salario / MSALARIO) * 100);
        print "<section>
                <h2>Resultado Final</h2>
                <p>O valor informado é " . $porsalario . "% do salário mínimo definido no programa.</p>
            </section>";
    }
    ?>
</body>

</html>