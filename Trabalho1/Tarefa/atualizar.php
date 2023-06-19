<?php

require_once "../conexao.php";

if(isset($_POST["Responsavel"]) &&
 isset($_POST["Descricao"]) && 
 isset($_POST["Prioridade"]) &&
 isset($_POST["Datalimite"])) {

$id =         $_POST["id"];
$Responsavel = $_POST["Responsavel"];
$Descricao =  $_POST["Descricao"];
$Prioridade =      $_POST["Prioridade"];
$DataLimite =     $_POST["DataLimite"];  


$sql = "UPDATE tarefas
        SET `Responsavel`= ?, `Descricao`= ?, `Prioridade`= ?, `DataLimite`= ?
        WHERE  `idtarefas`= ? ";
       

 $comando = $conexao->prepare($sql);


 $comando->bind_param("ssssi",$Responsavel, $Descricao,$Prioridade,$DataLimite,$id);


$comando->execute();
}

header("Location: index.php");


?>