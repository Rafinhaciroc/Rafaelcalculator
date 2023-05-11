<?php

$host = "127.0.0.1";
$port = "3306";
$user = "root";
$passaword = "";
$database = "db_catalogo_3infoa";

//faz a conexão do PHP com o MySQL
$conexao = new mysqli($host,
                      $user,
                      $passaword,
                      $database,
                      $port);

//Verifica se houver um erro ao realizar a conexão                     
if($conexao-> connect_error)  {
    echo"Foi encontado o erro :" .
                    $conexao->connect_error;
    die();
    

}                     
?>