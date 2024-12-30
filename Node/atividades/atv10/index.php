<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads</title>
</head>
<body>
    <?php
        // Verifica se o formulario foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formatospermitidos = array ('png', 'jpeg', 'jpg',  'gif');

            foreach ($_FILES['arquivo']['name'] as $indice => $valor) {
            
                $extensao = pathinfo($_FILES['arquivo']['name'][$indice], PATHINFO_EXTENSION);

                if (in_array($extensao, $formatospermitidos)) {
                    $pasta = "./arquivos/";
                    $temporario = $_FILES ['arquivo']['tmp_name'][$indice];
                    $newname = uniqid().".$extensao";

                    if (move_uploaded_file($temporario, $pasta.$newname)) {
                        echo "Upload do ". $indice + 1 ."° arquivo feito com sucesso <br>";
                    } else {
                        echo "Erro, não foi possível fazer o upload do ". $indice + 1 ."° arquivo <br>";
                    }
                } else {
                    echo "arquivos .$extensao não permitida.<br>";
                }

            }
        }
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="arquivo">Insira seu arquivo: </label>
        <input type="file" name="arquivo[]" id="arquivo" multiple>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>