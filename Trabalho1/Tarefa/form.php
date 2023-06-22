
<?php require_once "consultar_por_id.php"?>
<?php require_once "../template/cabecalho.php"; ?>


    <h1>Cadastro Tarefas</h1>
    <hr>
    <form action="<?php  echo isset($tarefa) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post" 
    
    enctype="multipart/form-data">

    <label for="Responsavel">Responsavel</label><br>
    <input type="text" name="Responsavel" id="Responsavel" value="<?php echo $tarefa['Responsavel'] ?? ""; ?>"><br>
    <input type="hidden" name="id" id="id" value="<?php echo $tarefa['idtarefas'] ?? ""; ?>"><br>

    <label for="Descricao">Descrição</label><br>
    <textarea name= "Descricao" id="Descricao" ><?php echo $tarefa['Descricao'] ?? ""; ?></textarea><br>

    <label for="Prioridade">Prioridade</label><br>
    <input type="text"  name="Prioridade" id="Prioridade" value="<?php echo $tarefa['Prioridade'] ?? ""; ?>"><br>

    <label for="DataLimite">DataLimite</label><br>
    <input type="date"  name="DataLimite" id="DataLimite" value="<?php echo $tarefa['DataLimite'] ?? ""; ?>"><br><br>

    <button type="submit">Cadastrar</button>

    </form>
    <?php require_once "../template/rodape.php"; ?>