<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais</title>
</head>
<body>
    <?php 
        $variavelg1 = 10;
        $variavelg2 = 25;
            function soma() {
                echo $GLOBALS ['variavelg1'] + $GLOBALS ['variavelg2'];
            }
        
        // Superglobal: Server

        echo $_SERVER['PHP_SELF']."<br>";
        echo $_SERVER['SERVER_NAME']."<br>";
        echo $_SERVER['SCRIPT_FILENAME']."<br>";
        echo $_SERVER['DOCUMENT_ROOT']."<br>";
        echo $_SERVER['SERVER_PORT']."<br>";
        echo $_SERVER['REMOTE_ADDR']."<br>";
    ?>
</body>
</html>