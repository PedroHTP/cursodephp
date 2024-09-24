<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Tabalhando com números aleatórios</h1>
        <?php
            $minimo = $_GET ['minimo'];
            $maximo = $_GET ['maximo'];
            $aleatorio = mt_rand($minimo, $maximo);
            echo "<p> Gerando um número aletório entre $minimo e $maximo</p>";
            echo "O valor gerado foi $aleatorio";
        ?>
        <button onclick="javascript:document.location.reload()"> &#x1F504; Gerar outro</button>
    </section>
</body>
</html>