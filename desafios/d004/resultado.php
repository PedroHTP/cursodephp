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
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $real = $_GET ['real'];
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            $dolar = $real / $cotacao;
            
            print "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" .  numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            print "<p>*Cotação de " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> obtida diretamente do site do <a href=\"https://www.bcb.gov.br\">Banco Central do Brasil</a>.</p>";
        ?>
        <botton><a href="javascript:history.go(-1)"> &#x2B05; Voltar</a></botton>
    </section>
</body>
</html>