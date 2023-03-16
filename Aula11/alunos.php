
<h2></h2>
<br>
<?php
$aluno1 = [
    "nome" => "Poliana Silveira",
    "nota" => 7,
    "notas" => 9

];

$aluno2 = [
    "nome" => "Murilo Alexandre",
    "nota" => 8,
    "notas" => 5

];
$aluno3 = [
    "nome" => "Andre Felipe",
    "nota" => 6,
    "notas" => 7

];
$aluno4 = [
    "nome" => "Lavinia Sandy",
    "nota" => 8,
    "notas" => 9

];
$dados = [
    $aluno1,
    $aluno2,
    $aluno3,
    $aluno4
];
    print_r($dados);
    echo json_encode($dados)

?>
