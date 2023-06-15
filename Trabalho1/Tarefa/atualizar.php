
<?php

require_once "../conexao.php";

if(isset($_POST["Responsavel"]) &&
 isset($_POST["Descricao"]) && 
 isset($_POST["Prioridade"]) &&
 isset($_POST["Datalimite"])) {

$id =         $_POST["id"];
$Responsavel = $_POST["Responsavel"];
$descricao =  $_POST["Descricao"];
$Prioridade =      $_POST["Prioridade"];
$DataLimite =     $_POST["DataLimite"];  

//String com o comando SQL oara ser executado do DB
$sql = "UPDATE Tarefas
        SET `Responsavel`= ?, `Descricao`= ?, `Prioridade`= ?, `DataLimite`= ?
        WHERE  `idtarefas`= ? ";
       
//Prepara o SQL par ser executado no banco de dados
 $comando = $conexao->prepare($sql);

 //adicionar od valores nos parâmetros
 $comando->bind_param("ssssi",$Responsavel, $Descricao,$Prioridade,$Datalimite,$id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();
}
//abre o arquivo form.php
header("Location: index.php");


?>






