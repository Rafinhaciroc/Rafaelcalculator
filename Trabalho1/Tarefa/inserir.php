
<?php

require_once "../conexao.php";

if(isset($_POST["Responsavel"]) && isset($_POST["Descricao"]) 
           && isset($_POST["Prioridade"]) && isset($_POST["DataLimite"]))
{




$Descricao =  $_POST["Descricao"];
$Prioridade =     $_POST["Prioridade"];
$DataLimite = $_POST["DataLimite"];
$Responsavel =      $_POST["Responsavel"];


//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO tarefas (`Descricao`, `Prioridade`, `DataLimite`, `Responsavel`) VALUES (?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssss", $Responsavel, $Descricao, $Prioridade, $DataLimite);



//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");
