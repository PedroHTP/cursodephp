<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <?php 
        //connect BD
            require_once 'db_connect.php';
        //session
            session_start();
        //login
        $login = mysqli_escape_string($connect, filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS)) ?? null; 
        $senha = mysqli_escape_string($connect, filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS)) ?? null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $erros = array();

            if(empty($login) or empty($senha)) {
                $erros[] = "<li>Os campos login e senha devem ser preenchido!</li>";
            }   else {
                $comando = "SELECT login FROM usuarios WHERE login = '$login'";
                $resultado = mysqli_query($connect, $comando);
                
                if (mysqli_num_rows($resultado) > 0) {
                    $senha = md5($senha);

                    $comando = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                    $resultado = mysqli_query($connect, $comando);

                    if (mysqli_num_rows($resultado) == 1) {
                        $dados = mysqli_fetch_array($resultado);
                        mysqli_close($connect);
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id'];

                        //redireciona a outra página
                            header('location: home.php');
                    } else {
                        $erros[] = "<li>Usuário e senha não conferem!</li>";
                    }
                } else {
                    $erros[] = "<li>Usuário não cadastrado</li>";
                }
            }

        }
    ?>
    <h1>Login</h1>
    <hr>
    <?php 
        if (!empty($erros)) {
            foreach ($erros as $mensagem) {
                echo $mensagem;
            }
        }
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="login">LOGIN:</label>
        <input type="text" name="login" id="login" value="<?=htmlspecialchars($login)?>">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value="<?=htmlspecialchars($senha)?>">
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>