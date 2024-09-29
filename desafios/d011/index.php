<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de salário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor = $_GET ['valor'] ?? false;
        $reajuste = $_GET['reajuste'] ?? 0;
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>
    <header>
        <h1>Reajustador de Preços</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Preço do Produto (R$)</label>
            <input type="number" name="valor" id="idvalor" value="<?=$valor?>">
            <label for="reajuste">Qual será o percentual do reajuste? <strong><span id="p">?</span>%</strong></label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()"
            value="<?= $reajuste ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php
        if ($valor != false) {   
        $valorn = $valor * (($reajuste/ 100) + 1 );
        print "<section>
            <h1>Resultado do Reajuste</h1>
            <p>O produto que custava ". numfmt_format_currency($padrao, $valor, "BRL") .", com <strong>". $reajuste."% de aumento</strong> vai passar a custar <strong>". numfmt_format_currency($padrao, $valorn, "BRL") ."</strong> a partir de agora.</p>
        </section>";
    }
    ?>
    <script>
    mudaValor()

    function mudaValor() {
        p.innerText = reajuste.value
    }
    </script>
</body>

</html>