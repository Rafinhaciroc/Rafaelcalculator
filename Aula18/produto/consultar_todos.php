<?php

require_once "../conexao.php";


//String com o comando SQL oara ser executado do DB
$sql = "SELECT*FROM `produto` where categoria like %?% ";
        
//Prepara o SQL par ser executado no banco de dados
 $comando = $conexao->prepare($sql);

 $categoria = $_GET['categoria'] ?? "";
 $comando->bind_param("s", $categoria);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$reusltado = $comando ->get_result();

//criar um vetor vazio
$produtos = [];


//pegar a todas as linha do resultado
while($produto = $reusltado->fetch_assoc()){
        //adiciona o produto (linha do resultado) no vetor
        $produtos[] = $produto;



}



?>







