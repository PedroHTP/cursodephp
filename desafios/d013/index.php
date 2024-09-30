<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônica</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img {
        height: 60px;
        margin: 4px;
    }
    </style>
</head>

<body>
    <?php 
        $valor = $_GET['sacar'] ?? false;
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sacar">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="sacar" id="idsacar" step="5" value="<?=$valor?>" min="5">
            <p><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
        <img src="" alt="">
    </main>
    <?php 
        if ($valor != false) {
            $cem = intdiv($valor, 100);
            $resto = $valor % 100;
            $cinq = intdiv($resto, 50);
            $resto = $resto % 50;
            $dez = intdiv($resto, 10);
            $resto = $resto % 10;
            $cinco = intdiv($resto, 5);
            
            print "<section>
                <h2>Saque de ". numfmt_format_currency($padrao, $valor, "BRL") ." realizado</h2>
                O caixa eletrônico vai te entregar as seguints notas: <ul>";
            if ($cem>0) {
                print "<li>";
                print "<img src=\"imagens\\100-reais.jpg\" alt=\"\"></img>" . " x" . $cem;
                print "</li>";
            }
            if ($cinq>0) {
                print "<li>";
                print "<img src=\"imagens\\50-reais.jpg\" alt=\"\"></img>" . " x" . $cinq;
                print "</li>";
            }
            if ($dez>0) {
                print "<li>";
                print "<img src=\"imagens\\10-reais.jpg\" alt=\"\"></img>" . " x" . $dez;
                print "</li>";
            }
            if ($cinco>0) {
                print "<li>";
                print "<img src=\"imagens\\5-reais.jpg\" alt=\"\"></img>" . " x" . $cinco;
                print "</li>";
            }
            print "</ul></section>";
        }
    ?>
</body>

</html>