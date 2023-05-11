<?php

require_once"../conexao.php";

if(isset($_POST["nome"]) &&
 isset($_POST["descricao"]) && 
 isset($_POST["preco"])) {

$nome =       $_POST["id"];
$nome =       $_POST["nome"];
$descricao =  $_POST["descricao"];
$preco =      $_POST["preco"];
$foto =       "semfoto.png";

//String com o comando SQL oara ser executado do DB
$sql = "UPDATE `db_catalogo_3infoa`.`produto` SET `nome`='$nome', `descricao`='$descricao', `preco`='$preco', `foto`='$foto' WHERE  `idproduto`=$id;";
       
//Prepara o SQL par ser executado no banco de dados
 $comando = $conexao->prepare($sql);

 //adicionar od valores nos parâmetros
 $comando->bind_param("ssdsi",$nome, $descricao,$preco,$foto, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();
}
//abre o arquivo form.php
header("Location: form.php");
?>






