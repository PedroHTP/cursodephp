<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando funções</title>
</head>
<body>
    <h1>Criando Funções</h1>
    <?php 
            function exibirPerfil($nome, $idade, $profissão) {
                Echo "Nome: ".$nome.
                "<br>Idade: ".$idade.
                "<br>Profissão: ".$profissão;
        }
        exibirPerfil("Pedro Henrique Teixeira Pião", 25, "Açougueiro")  
    ?>
</body>
</html>