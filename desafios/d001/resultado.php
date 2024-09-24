<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Resultado Final</h1>
        <?php 
            $numero = $_GET ["numero"] ?? "Número não inserido";
            $anterior = $numero - 1;
            $seguinte = $numero + 1;
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu antecessor é $anterior</p>";
            echo "<p>O seu sucessor é $seguinte</p>";
        ?>
        <botton><a href="javascript:history.go(-1)"> &#x2B05; Voltar</a></botton>
    </main>
</body>
</html>