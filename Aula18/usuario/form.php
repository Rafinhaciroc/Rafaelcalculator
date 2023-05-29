<?php require_once "consultar_por_id.php"?>
<?php require_once "../template/cabecalho.php"; ?>
    
<div class="container">

<h1>Cadratro de Usuario</h1>
    <hr>
    <form action="<?php  echo isset($usuario) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post" 
    
    enctype="multipart/form-data">

    <label for="name" class="form-label">Nome</label><br>
    <input class="form-control" type="text" name="nome" id="nome" 
    value="<?php echo $usuario['nome'] ?? ""; ?>"><br>
    
    <input type="hidden" name="id" id="id" 
    value="<?php echo $usuario['idproduto'] ?? ""; ?>"><br>

    <label for="login" class="form-label">Login</label><br>
    <input class="form-control" type="text" name= "login" id="login" value="<?php echo $usuario['login'] ?? ""; ?>"><br>

    <label for="preco" class="form-label">senha</label><br>
    <input class="form-control" type="password" name="senha" id="senha" value="<?php echo $usuario['senha'] ?? ""; ?>"><br>

    <label for="foto" class="form-label">Foto</label><br>  
    <input class="form-control" type="file" name="foto" id="foto"><br><br>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
</div>
    <?php require_once "../template/rodape.php"; ?>