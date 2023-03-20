<?php
$block1 = [
    "nome" => "Poliana ",
    "nota3" => 7,
    "nota2" => 9
];
$block2 = [
    "nome" => "Murilo Alexandre",
    "nota3" => 8,
    "nota2" => 5
];
$block3 = [
    "nome" => "Lavinia Sandi",
    "nota3" => 6,
    "nota2" => 7
];
$block4 = [
    "nome" => "Felipe Mota",
    "nota3" => 5,
    "nota2" => 8
];
$tabela = [$block1, $block2, $block3, $block4];
echo json_encode($tabela);
?>

