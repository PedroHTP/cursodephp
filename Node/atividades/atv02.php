<!-- Arrays multidimensionais -->

<?php 
    $campeonato = array (
        "Carioca" => array (
            "1° Lugar" =>  "Flamengo",
            "2° Lugar" =>  "Vasco",
            "3° Lugar" =>  "Botafogo"
        ),
        "Paulista" => array (
            "1° Lugar" =>  "Santos",
            "2° Lugar" =>  "São Paulo",
            "3° Lugar" =>  "Palmeiras"
        ),
        "Baiano" => array (
            "1° Lugar" =>  "Bahia",
            "2° Lugar" =>  "Vitoria",
            "3° Lugar" =>  "Guanambi"
        )
        );
    
    foreach ($campeonato as $regiao => $posicaos) {
        echo "Campeonato $regiao: <br><ul>";

            foreach ($posicaos as $posicao => $time) {
                echo "<li>$posicao: $time</li><br>";
            }
        echo "</ul><hr>";
    }
?>