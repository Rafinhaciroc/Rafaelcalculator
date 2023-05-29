<?php

require_once"../conexao.php";

//Verifica se foi enviado o param id pela URL
if(isset($_GET['id'])){

$id = $_GET['id'];

//String com o comando SQL oara ser executado do DB
$sql = "DELETE FROM `usuario` WHERE  `idusuario`= ? ; ";
        
//Prepara o SQL par ser executado no banco de dados
 $comando = $conexao->prepare($sql);

 //adicionar od valores nos parâmetros
 $comando->bind_param("i", $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();
}
//abre o arquivo form.php
header("Location:   index.php");

?>







