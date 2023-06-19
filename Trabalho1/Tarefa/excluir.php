
<?php

require_once "../conexao.php";


if(isset($_GET['id'])){

$id = $_GET['id'];


$sql = "DELETE FROM `tarefas` WHERE  `idtarefas`= ? ; ";
        

 $comando = $conexao->prepare($sql);


 $comando->bind_param("i", $id);


$comando->execute();
}

header("Location: index.php");

?>







