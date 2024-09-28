<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor = $_GET ['valor'] ?? false;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Número:</label>
            <input type="number" name="valor" id="idvalor" value="<?=$valor?>" step="any">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <?php 
            if ($valor != false) {
                $raizq = round ($valor ** (1/2), 3);
                $raizc = round ($valor ** (1/3), 3);
                // Consegue a quantidade de decimais de cada valor que vai aparecer
                $decimalv = substr(strpbrk($valor, '.'), 1);
                $contv = iconv_strlen($decimalv);
                $decimalq = substr(strpbrk($raizq, '.'), 1);
                $contq = iconv_strlen($decimalq);
                $decimalc = substr(strpbrk($raizc, '.'), 1);
                $contc = iconv_strlen($decimalc);
                //
            print "
            <section>
                <h1>Resultado final</h1>
                <p>Analisando o número <strong>". number_format($valor, $contv, ",", ".") ."</strong>, temos:</p>
                <ul>
                    <li>A sua raiz quadrada é <strong>". number_format($raizq, $contq, ",", ".") ."</strong></li>
                    <li>A sua raiz cúbica é <strong>". number_format($raizc, $contc, ",", ".") ."</strong></li>
                </ul>
                <p>* Os valores com mais de 3 casas decimais foram arredondados.</p>
            </section>
            ";
        }
        ?>
</body>

</html>