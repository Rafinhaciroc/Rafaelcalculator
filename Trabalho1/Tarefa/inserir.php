
<?php

require_once "../conexao.php";

if(isset($_POST["Responsavel"]) && isset($_POST["Descricao"]) 
           && isset($_POST["Prioridade"]) && isset($_POST["DataLimite"]))
{




$Descricao =  $_POST["Descricao"];
$Prioridade =     $_POST["Prioridade"];
$DataLimite = $_POST["DataLimite"];
$Responsavel =      $_POST["Responsavel"];



$sql = "INSERT INTO tarefas (`Descricao`, `Prioridade`, `DataLimite`, `Responsavel`) VALUES (?, ?, ?, ?);";


$comando = $conexao->prepare($sql);


$comando->bind_param("ssss", $Responsavel, $Descricao, $Prioridade, $DataLimite);




$comando->execute();

}

header("Location: index.php");
