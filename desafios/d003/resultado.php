<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $real = $_GET ['real'];
            $cotacao = 5.54;
            $dolar = number_format($real / $cotacao, 2, ',', '.');
            print "<p>Seus R$ " . number_format($real, 2, ',', '.') . " equivalem a <strong> US$  $dolar </strong></p>";
            print "<p><strong>* Cotação fixa de R\$" . number_format($cotacao, 2, ',', '.') . "</strong> informada diretamente no código.</p>";
        ?>
        <botton><a href="javascript:history.go(-1)"> &#x2B05; Voltar</a></botton>
    </section>
</body>
</html>