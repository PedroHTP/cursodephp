<?php
    // message
    include_once './includes/message.php';
    //conexao
    include_once './php_action/db_connect.php';
     // head
    $title = 'CRUD';
    include_once './includes/header.php'
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>E_mail:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $comando = "SELECT * FROM clientes ";
                    $resultado = mysqli_query($connect, $comando);

                    
                    while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                <tr>
                    <td><?=$dados['nome']?></td>
                    <td><?=$dados['sobrenome']?></td>
                    <td><?=$dados['email']?></td>
                    <td><?=$dados['idade']?></td>
                    <td><a href="" class="btn-floating green"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <br>
        <a href="./adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php 
    include_once './includes/footer.php' // script javascritp - Materialize
?>