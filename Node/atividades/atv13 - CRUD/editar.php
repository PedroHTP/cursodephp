<?php 
    // head
    $title = 'CRUD';
    include_once './includes/header.php'; 
    // conexão
    include_once './php_action/db_connect.php';

    // validação do id
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
        if (!$id) {
            $_SESSION['mensagem'] = "ID inválido!";
            header('Location: ../index.php');
            exit;
    }

    $comando = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $comando);
    $dados = mysqli_fetch_array($resultado);

    $nome = $dados['nome'];
    $sobrenome = $dados['sobrenome'];
    $email = $dados['email'];
    $idade = $dados['idade'];
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> EDITAR CLIENTE</h3>
        <form action="./php_action/update.php?id=<?=$id?>" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?=htmlspecialchars($nome)?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?=htmlspecialchars($sobrenome)?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?=htmlspecialchars($email)?>">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade" value="<?=htmlspecialchars($idade)?>">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-editar" class="btn"> Atualizar</button>
            <a href="index.php" class="btn green">Lista de clientes</a>
        </form>
    </div>
</div>

<?php 
    include_once './includes/footer.php' // script javascritp - Materialize
?>