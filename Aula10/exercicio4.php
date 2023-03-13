<h2>Exercicio4</h2>
<br>
<?php
$aluno1 = [
    "nome" => "Poliana",
    "nota" => 7,
    "notas" => 9

];

$aluno2 = [
    "nome" => "Murilo",
    "nota" => 8,
    "notas" => 5

];
$aluno3 = [
    "nome" => "Andre",
    "nota" => 6,
    "notas" => 7

];
$tabela = [
    $aluno1,
    $aluno2,
    $aluno3
];


    foreach($tabela as $key => $value){
        echo $value ["nome"] . "</br>" . $value ["nota"] . "</br>" . $value ["notas"] . "</br>";
       

    }

?>
