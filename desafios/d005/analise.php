<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise do número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <h1>Analisador de Número real</h1>
        <?php 
        $absoluto = $_GET['absoluto'];
        $inteiro = (int) $absoluto;
        $decimal = substr(strpbrk($absoluto, '.'), 1);
        $cont = iconv_strlen($decimal);
        $frac = $decimal / 10 ** $cont;
        echo "Alisando o número " . number_format($absoluto, $cont, ",", ".") . " informado pelo usúario:";
        echo "
        <ul>
            <li>A parte inteira do número é " . number_format($inteiro, 0, ",", ".") . "</li>
            <li>A parte fracionária do número é " . number_format($frac, $cont, ",", ".") . "</li>
        </ul>
        ";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>