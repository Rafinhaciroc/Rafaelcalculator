<?php

require_once "../conexao.php";



$sql = "SELECT*FROM `tarefas` " ;
        

 $comando = $conexao->prepare($sql);




$comando->execute();


$resultado = $comando ->get_result();


$tarefas = [];

while($tarefa = $resultado->fetch_assoc()){
        $tarefas[] = $tarefa;


        



}



?>







