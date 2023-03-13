<h2>Exercico 3</h2>
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
    "nome" => "andre",
    "nota" => 6,
    "notas" => 7

];
$tabela = [
    $aluno1,
    $aluno2,
    $aluno3
];

for($i=0; $i < 3; $i++){
        foreach($tabela[$i] as $key => $value){
            echo $value . "</br>";
}
}
?>

