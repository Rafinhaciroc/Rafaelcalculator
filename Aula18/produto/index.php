<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>


    <div class="container">
    <h1>Produtos</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir produtos</a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </div>
    <table class="table" id="myTable">
  <thead>
    
 
    
  
  <tr>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Fotos</th>
      <th scope="col" width="25%">Ações</th>
    </tr>
    
    

  </thead>
   <tbody>
   
   <?php foreach($produtos as $produtos){ ?>
   <tr>
      <th scope="row"><?php echo $produtos['nome']; ?></th>
      <td><?php echo $produtos['preco']; ?></td>
      <td><img src="../uploads/<?php echo $produtos['foto']; ?>" 
       height="30px" alt="" ></td>
      <td>
      <a href="excluir.php?id=<?php echo $produtos['idproduto']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
        <a href="form.php?id=<?php echo $produtos['idproduto']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr>
    <?php } ?>
 
</tbody>
</table>
</div>
<?php require_once "../template/rodape.php"; ?>