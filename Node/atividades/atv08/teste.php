<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Moderno</title>
</head>
<body>

<?php
// Usando coalescência nula para não precisar fazer if (isset($_POST['nome'])) etc.
$nome  = $_POST['nome']  ?? '';
$email = $_POST['email'] ?? '';

// Se o formulário foi enviado...
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h3>Dados recebidos:</h3>";
    echo "<p><strong>Nome:</strong> {$nome}</p>";
    echo "<p><strong>E-mail:</strong> {$email}</p>";
}
?>

<form action="" method="post">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($nome) ?>">
    <br><br>
    
    <label for="email">E-mail: </label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>">
    <br><br>
    
    <button type="submit">Enviar</button>
</form>

</body>
</html>
