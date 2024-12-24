<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis PHP</title>
</head>
<body>
    <h1>Tipos de variaveis</h1>
    <?php 
    $var = "Bill Gates";
    $tipo = gettype($var);
        echo "
            <ul>
                <li>$var " . "($tipo)</li>
        ";
    $var = 12;
    $tipo = gettype($var);
            echo "
              <li>$var " . "($tipo)</li>
            ";
    $var = 3.235242;
    $tipo = gettype($var);
        echo "
            
                <li>$var " . "($tipo)</li>
        ";
    $var = true;
    $tipo = gettype($var);
        echo "
                <li>$var " . "($tipo)</li>
            </ul>
        ";
    ?>

    <!-- Verificação das variaveis -->
    <?php
    $var = null;
    if (is_null($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é nula/vazia!" . "<br>";
    } 
    $var = "Bill Gates";
    if (is_string($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é uma String!" . "<br>";
    }
    $var = 12;
    if (is_int($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é inteiro!" . "<br>";
    }
    $var = 3.23242;
    if (is_float($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é float/real!" . "<br>";
    }
    $var = true;
    if (is_bool($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é booleana!" . "<br>";
    }
    $var = array("Bill gates", 12, 3.252123, true);
    if (is_array($var)) {
        echo var_dump($var) . "<br>";
        echo "Variavel \$var" . " é uma array!" . "<br>";
    }
    ?>

    <h1>Arrays</h1>
    <?php 
        // Array: Definição Direta (sem chave)

        //Aleatoriza valores
        for ($i=0; $i < 7; $i++) { 
            $nota[$i] = rand(0, 10);
        }
        
        //Exibe valores
        for ($i=0; $i < 7; $i++) { 
            echo $i . "° Posição: " . $nota[$i] . "<br>";
        }
        
        $soma = 0;
        //calcular media de notas
        for ($i=0; $i < 7; $i++) { 
            $soma += $nota[$i]; 
        }

        $media = round($soma / 7);

        echo "<p>Média do aluno: $media</p>";

        echo "<br>";
        var_dump($nota);

        // Operadores

        // Adição +
        // Subtração -
        // Multiplicação *
        // Divisão /
        // Módulo %
        // Exponenciação **
        // 
        
    echo "<hr>";

        // match (PHP 8)
        
        $numero = 10;

    $resultado = match (true) {
    $numero < 5 => "Menor que 5",
    $numero >= 5 && $numero <= 15 => "Entre 5 e 15",
    default => "Maior que 15",
    };

    echo $resultado;

    echo "<hr>";

    class Usuario {
    public function __construct(public string $tipo) {}
    }

    $usuario = new Usuario("admin");

    $permissao = match ($usuario->tipo) {
    "admin" => 3,
    "editor" => 2,
    "visitante" => 1,
    default => 0,
    };

    echo $permissao; // Saída: Acesso nível 3

    // Operadores de comparação

        // (==) - Comparação frouxa ou Igualdade
        // (!=) - Diferente
        // (===) - Comparação estrita ou identidade
        // (!===) - Diferente estrita ou não identico
        // <> - Diferente
        // > - Maior que
        // < - Menor que
        // <= - Maior ou igual
        // >= - Menor ou igual
        // <=> - SpaceShip (Se o lado esquerdo for menor ele retorna "-1", se o lado direito for menor ele retorna "1" e se ambos os lados forem iguais ele retorna "0")
        
        echo "<hr>";

        $esquerda = 10 <=> 20;
        $direita = 20 <=> 10;
        $igual = 20 <=> 20;

        echo "Esquerda: 10 | direita: 20 | 10 <=> 20 | Saída: ".$esquerda."<br>";
        echo "Esquerda: 20 | direita: 10 | 20 <=> 10 | Saída: ".$direita."<br>";
        echo "Esquerda: 20 | direita: 20 | 20 <=> 20 | Saída: ".$igual;

        echo "<hr>";

        // Operadores lógicos

        // e (&& - and)
        // ou (|| - or)
        // ou exclusivo (xor) - Somente uma das expressões pode ser verdadeira.
        // não (!) - muda o true por false, e vice versa.

        $cargo = "Gerente";
        $salario = 2232.42;

        if (($cargo == "Gerente") xor ($salario < 2000)) {
            echo "O pagamento do gerente está acima do mínimo de seu cargo";
        } else {
            echo "Dados incoerentes. Por favor confira se os dados corretos foram inseridos.";
        }
    ?>
</body>
</html>