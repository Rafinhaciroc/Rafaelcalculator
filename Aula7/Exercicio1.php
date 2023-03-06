<h2>Exercicio 1</h2>
<?php

$notas = [];
$notas[]= "murilo";
$notas[] = 4;
$notas[] = 3;
$notas[] = ($notas [1] + $notas[2])/2;


if ($notas [3] >= 6) {
    $notas[] = "aprovado";
} else {
    $notas[] = "reprovado";
}

var_dump ($notas);
?>
    