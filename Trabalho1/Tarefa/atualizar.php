
<?php require_once "../conexao.php";


$id = $_POST["id"];
$Responsavel = $_POST["Responsavel"];
$Descricao = $_POST["Descricao"];
$Prioridade = $_POST["Prioridade"];
$DataLimite = $_POST["DataLimite"];

$sql = "UPDATE tarefas SET `Responsavel`= ?, `Descricao`= ?, `Prioridade`= ?, `DataLimite`= ? WHERE  `idtarefas`=?;";
$comando = $conexao->prepare($sql);
$comando->bind_param("ssssi", $Responsavel, $Descricao, $Prioridade, $DataLimite, $id);
$comando->execute();

header("location: index.php"); 
 



