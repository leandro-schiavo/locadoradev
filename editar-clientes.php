<div class="container">

<?php
$idCliente = $_GET["idCliente"];
$sql = "SELECT * FROM tbclientes WHERE idCliente = '{$idCliente}'";
$rs = mysqli_query($conection,$sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conection));
$dados = mysqli_fetch_assoc($rs);
?>
<h2>Editar Cliente</h2>
<form action="index.php?menu=atualizar-clientes" method="post">
    <div class="mb-3">
        <label class="form-label" for="idCliente">Id do Cliente</label>
        <div class="input-group">
        <div class="input-group-text">
            <i class="bi bi-person-square"></i>
        </div>
        <input class="form-control" type="text" name="idCliente" id="idCliente" value="<?=$dados["idCliente"]?>" readonly>
</div>
      </div>

    <div class="mb-3"> 
        <label class="form-label" for="nomeCliente">Nome do Cliente</label>
        <div class="input-group">
        <div class="input-group-text">
        <i class="bi bi-keyboard"></i>
        </div>
        <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" value="<?=$dados["nomeCliente"]?>" required>
</div>
    </div>
    
    <div class="mb-3">
    <label class="form-label" for="telefoneCliente">Telefone do Cliente</label>
    <div class="input-group">
        <div class="input-group-text">
        <i class="bi bi-telephone-fill"></i>
        </div>
        <input class="form-control" type="text" name="telefoneCliente" id="telefoneCliente" value="<?=$dados["telefoneCliente"]?>" required>
</div>
    </div>

    <div class="mb-3">
    <label class="form-label" for="emailCliente">Email Cliente</label>
    <div class="input-group">
        <div class="input-group-text">
        <i class="bi bi-envelope-at-fill"></i>
        </div>
        <input class="form-control" type="text" name="emailCliente" id="emailCliente" value="<?=$dados["emailCliente"]?>" required>
</div>
    </div>

    <div class="mb-3"> 
        <label class="form-label" for="statusCliente">Status Cliente</label>
        <div class="input-group">
        <div class="input-group-text">
        <i class="bi bi-toggles"></i>
        </div>
        <select class="form-select" name="statusCliente" id="statusCliente" required>
            <option value="">Selecione Status</option>
            <option value="0">Ativo</option>
            <option value="1">Inativo</option>
        </select>
</div>
    </div>

    
    <div class="mb-3">
    <button class="btn btn-success" type="submit"><i class="bi bi-floppy-fill"></i> Salvar</button>
    </div>
</form>
</div>