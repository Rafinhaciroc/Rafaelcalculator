<?php include_once "../template/cabecalho.php"; ?>

<?php include_once "../template/rodape.php"; ?>

<div class="container">
<form action="verifica_login.php" method="post">

<label class="form-label">Usuário</label>
<input type="text" name="usuario" class="form-control">

<label class="form-label">Senha</label>
<input type="password" name="senha" class="form-control">

<button type="submit" class=" bnt btn-primary"></button>

</form>
</div>
<?php include_once "../template/rodape.php";  ?>