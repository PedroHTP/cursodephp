<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); // GMT -3
        echo "Hoje é dia " . date("d/m/Y");
        echo " e a hora é " . date("G.i.s") . " na time zone " . date("T");
    ?>
</body>
</html>