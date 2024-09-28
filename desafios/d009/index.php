<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $v1 = $_GET ['valor1'] ?? false;
        $p1 = $_GET ['peso1'] ?? false;
        $v2 = $_GET ['valor2'] ?? false;
        $p2 =  $_GET ['peso2'] ?? false;
        $nd = $_GET ['nd'] ?? false;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1° valor:</label>
            <input type="number" name="valor1" id="idvalor1" value="<?=$v1?>" step="any">
            <label for="peso1">1° peso:</label>
            <input type="number" name="peso1" id="idpeso1" value="<?=$p1?>" step="any">
            <label for="valor2">2° valor:</label>
            <input type="number" name="valor2" id="idvalor2" value="<?=$v2?>" step="any">
            <label for="peso2">2° peso:</label>
            <input type="number" name="peso2" id="idpeso2" value="<?=$p2?>" step="any">
            <label for="nd">Selecione a quantidade máxima de decimais dos resultados:</label>
            <input type="number" name="nd" id="idnd" value="<?=$nd?>">
            <input type="submit" value="Calcular médias">
        </form>
    </main>
    <?php 
        if ($v1 != false or $v2 != false) {
            $media = round(($v1 + $v2) / 2, $nd);
            $mediap = round(($v1 * $p1 + $v2 * $p2) / ($p1 + $p2), $nd);
            // Quantidade de decimais:
                $decimalv1 = substr(strpbrk($v1, '.'), 1);
                $contv1 = iconv_strlen($decimalv1);
                $decimalv2 = substr(strpbrk($v2, '.'), 1);
                $contv2 = iconv_strlen($decimalv2);
                $decimalp1 = substr(strpbrk($p1, '.'), 1);
                $contp1 = iconv_strlen($decimalp1);
                $decimalp2 = substr(strpbrk($p2, '.'), 1);
                $contp2 = iconv_strlen($decimalp2);
                $decimalm = substr(strpbrk($media, '.'), 1);
                $contm = iconv_strlen($decimalm);
                $decimalmp = substr(strpbrk($mediap, '.'), 1);
                $contmp = iconv_strlen($decimalmp);
            //
            print "<section>
                <h1>Cálculo das médias</h1>
                <p>Analisando os valores ". number_format($v1, $contv1, ",", ".") ." e ". number_format($v2, $contv2, ",", ".") .":</p>
                <ul>
                    <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($media, $contm, ",", ".") . "</li>
                    <li>A <strong>Média Aritmética Ponderada</strong> com pesos ". number_format($p1, $contp1, ",", ".") . " e ". number_format($p2, $contp2, ",", ".") ." é igual a ". number_format($mediap, $contmp, ",", ".") . "</li>
                </ul>
            </section>";
        }
    ?>
</body>

</html>