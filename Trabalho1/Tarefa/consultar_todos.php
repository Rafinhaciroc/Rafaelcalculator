<?php

require_once "../conexao.php";



$sql = "SELECT*FROM `Tarefas` " ;
        

 $comando = $conexao->prepare($sql);




$comando->execute();


$resultado = $comando ->get_result();


$Tarefas = [];

while($Tarefa = $resultado->fetch_assoc()){
        $Tarefas[] = $Tarefa;


        



}



?>







