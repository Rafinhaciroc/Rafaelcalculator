<?php require_once "../controla_sessao/controla.php";?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>
<?php require_once "../template/menu.php"; ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
    <h1>Usuario</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir usuario</a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </div>
    <table class="table" id="myTable">
  <thead>
    
 
    
  
  <tr>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Fotos</th>
      <th scope="col" width="25%">Ações</th>
    </tr>
    
    

  </thead>
   <tbody>
   
   <?php foreach($usuarios as $usuario){ ?>
   <tr>
      <th scope="row"><?php echo $usuario['nome']; ?></th>
      <td><?php echo $usuario['login']; ?></td>
      <td>
        <img src="../uploads/<?php echo $usuario['foto']; ?>" 
       height="30px" alt="" ></td>
      <td class="text-end">
      <a href="excluir.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
        <a href="form.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr>
    <?php } ?>
 
</tbody>
</table>
</div>
<?php require_once "../template/rodape.php"; ?>
   