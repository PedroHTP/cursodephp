<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos em PHP</h1>
    <?php 
    // 0X = hexadecimal 0b = binario 0 = Octal
    // $num = 010;
    //echo "O valor da variável é $num;
    
    // $v = "Gustavo";
    // var_dump($v);

    // $num = (integer) 3e2; // 3x 10²
    // echo "O valor é $num";
    //var_dump($num);

    // $num = (float) "950";
    // var_dump ($num);

    // $casado = true;
    // var_dump($casado);
    // echo "O valor para casado é $casado";

    //$vet = [6, 2, "Maria", 3, false];
    //var_dump($vet);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p)
    ?>
</body>

</html>