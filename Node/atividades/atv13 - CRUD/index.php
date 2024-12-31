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

                    if (mysqli_num_rows($resultado) > 0) {
                        
                        while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                <tr>
                    <td><?=$dados['nome']?></td>
                    <td><?=$dados['sobrenome']?></td>
                    <td><?=$dados['email']?></td>
                    <td><?=$dados['idade']?></td>
                    <td><a href="./editar.php?id=<?=$dados['id']?>" class="btn-floating green"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?=$dados['id']?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                    <!-- Modal Structure -->
                        <div id="modal<?=$dados['id']?>" class="modal">
                            <div class="modal-content">
                            <h4>Tem certeza?</h4>
                            <p>Você clicou em deletar esse perfil.</p>
                            </div>
                            <div class="modal-footer" style="display: flex;">
                                <form action="./php_action/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?=$dados['id']?>">
                                    <button type="submit" class="btn red">Deletar</button>
                                </form>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </div>
                        </div>
                </tr>
                <?php 
                    }
                } else {
                    ?>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <form action="./adicionar.php" method="post">
            <button type="submit" name="btn-adicionar" class="btn">Adicionar cliente</button>
        </form>
    </div>
</div>

<?php 
    include_once './includes/footer.php' // script javascritp - Materialize
?>