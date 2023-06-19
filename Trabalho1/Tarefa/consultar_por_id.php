<?php

require_once "../conexao.php";


if(isset($_GET['id'])){

$id = $_GET['id'];


$sql = "SELECT*FROM `Tarefas` WHERE  `idtarefas`= ? ; ";
        

 $comando = $conexao->prepare($sql);


 $comando->bind_param("i", $id);


$comando->execute();


$resultado = $comando ->get_result();


$tarefa = $resultado->fetch_assoc();



}

?>







