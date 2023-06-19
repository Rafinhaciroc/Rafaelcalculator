<?php

$host = "127.0.0.1";
$port = "3306";
$user = "root";
$passaword = "";
$database = "tarefas";


$conexao = new mysqli($host,
                      $user,
                      $passaword,
                      $database,
                      $port);

                  
if($conexao-> connect_error)  {
    echo"Foi encontado o erro :" .
                    $conexao->connect_error;
    die();
    

}                     
?>