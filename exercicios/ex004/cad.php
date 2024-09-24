<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET ["nome"] ?? "Pessoa sem nome";
            $sobrenome = $_GET ["sobrenome"] ?? "sem sobrenome";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é meu site! </p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>