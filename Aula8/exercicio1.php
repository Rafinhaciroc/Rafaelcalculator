<h2>Ordenação</h2>

<?php

    $nomes = [
         "Murilo",
         "Poliana",
         "Dalva",
         "Lavinia",
         "Camila",
         "Kauã"
];

    for($c = 0; $c <= 5; $c++) {  
        for($i = $c +1; $i <= 5; $i++) {
            if($nomes[$c] > $nomes[$i]){
                $celBranco = $nomes[$i];
                $nomes[$i] = $nomes[$c];
                $nomes[$c] = $celBranco;
        }  
    }
}
dump($nomes);

?>