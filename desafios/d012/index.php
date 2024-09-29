<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $tempo = $_GET['segundos'] ?? false;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="idsegundos" value="<?=$tempo?>" min="1">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        if ($tempo != false) {
            $semanas = intdiv($tempo, 604800);
            $resto = $tempo % 604800;
            $dias = intdiv($resto, 86400);
            $resto = $resto % 86400;
            $horas = intdiv($resto, 3600);
            $resto = $resto % 3600;
            $minutos = intdiv($resto, 60);
            $resto = $resto % 60;
            $segundos = $resto;
            print "<section>
               <h1>Totalizando tudo </h1>
               <p>Analisando o valor que você digitou, <strong>". $tempo ." segundos</strong> equivalem a um total de:</p>
            <ul>";
                if ($semanas > 0) {print "<li>".$semanas." semanas</li>";}
                if ($dias > 0) {print "<li>".$dias." dias</li>";}
                if ($horas > 0) {print "<li>".$horas." horas</li>";}
                if ($minutos > 0) {print "<li>".$minutos." minutos</li>";}
                if ($segundos > 0) {print "<li>".$segundos." segundos  </li>";}
            print "</ul></section>";
        }
        ?>
</body>

</html>