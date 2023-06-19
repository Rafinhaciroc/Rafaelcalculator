<?php

require_once "../conexao.php";

if(isset($_POST["Responsavel"]))
{




$Descricao =  $_POST["Descricao"];
$Prioridade =     $_POST["Prioridade"];
$DataLimite = $_POST["DataLimite"];
$Responsavel =      $_POST["Responsavel"];



$sql = "INSERT INTO tarefas (`Descricao`, `Prioridade`, `DataLimite`, `Responsavel`) VALUES (?, ?, ?, ?);";


$comando = $conexao->prepare($sql);


$comando->bind_param("ssss", $Descricao, $Prioridade, $DataLimite, $Responsavel);




$comando->execute();

}

header("Location: index.php");