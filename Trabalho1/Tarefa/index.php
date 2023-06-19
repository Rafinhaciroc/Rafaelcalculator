
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../conexao.php";?>
<?php require_once "../template/cabecalho.php"; ?>
<?php require_once "../template/menu.php"; ?>


    <div class="container">
    <h1>Tarefas</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir Tarefas</a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </div>
    <table class="table" id="myTable">
  <thead>
    
 
    
  
  <tr>
      
      <th scope="col">Responsável</th>
      <th scope="col">Descrição</th>
      <th scope="col">Prioridade</th>
      <th scope="col">DataLimite</th>
      <th scope="col" width="25%">Ações</th>
    </tr>
    
    

  </thead>
   <tbody>
   
   <?php foreach($tarefas as $tarefa){ ?>
   <tr>
      <th scope="row"><?php echo $tarefa['Responsavel']; ?></th>
      <td><?php echo $tarefa['Descricao']; ?></td>
      <td><?php echo $tarefa['Prioridade']; ?></td>
      <td><?php echo $tarefa['DataLimite']; ?></td>
      
       </td>
      <td>
      <a href="excluir.php?id=<?php echo $tarefa['idtarefas']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
        <a href="form.php?id=<?php echo $tarefa['idtarefas']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr>
    <?php } ?>
 
</tbody>
</table>
</div>
<?php require_once "../template/rodape.php"; ?>