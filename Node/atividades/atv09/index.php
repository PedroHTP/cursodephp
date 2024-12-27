<!DOCTYPE html>
<html lang="pt--br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitização</title>
    <style>
        .erro {
            color: red;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 5px;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php 
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS) ?? null;
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT) ?? null;
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? null;
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL) ?? null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $erros = array();
            
            if (!filter_var($idade, FILTER_VALIDATE_INT)) {
                $erros[] = 'Idade inválida';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erros[] = 'E-mail inválido';
            }
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                $erros[] = 'URL inválida';
            }
            

            if (!empty($erros)) {
                foreach ($erros as $mensagem) {
                    echo '<p class="erro">$mensagem</p> <br>';
                }
            } else {
                echo "NOME: $nome <br>
                IDADE: $idade <br>
                EMAIL: $email <br>
                URL: $url <br>
                ";
            }
        }
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?=htmlspecialchars($nome)?>">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" value="<?=htmlspecialchars($idade)?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?=htmlspecialchars($email)?>">
        <label for="url">URL:</label>
        <input type="url" name="url" id="url" value="<?=htmlspecialchars($url)?>">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>