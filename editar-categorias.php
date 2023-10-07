<div class="container">

<?php
$idCategoria = $_GET["idCategoria"];
$sql = "SELECT * FROM tbcategorias WHERE idCategoria = '{$idCategoria}'";
$rs = mysqli_query($conection,$sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conection));
$dados = mysqli_fetch_assoc($rs);
?>
<h2>Editar Categoria</h2>
<form action="index.php?menu=atualizar-categorias" method="post">
    <div class="mb-3">
        <label class="form-label" for="idCategoria">ID</label>
        <div class="input-group">
        <div class="input-group-text">
            <i class="bi bi-person-square"></i>
        </div>
        <input class="form-control" type="text" name="idCategoria" id="idCategoria" value="<?=$dados["idCategoria"]?>" readonly required>
</div>
    </div>

    <div class="mb-3"> 
        <label class="form-label" for="nomeCategoria">Nome da Categoria</label>
        <div class="input-group">
        <div class="input-group-text">
        <i class="bi bi-collection-play"></i>
        </div>
        <input class="form-control" type="text" name="nomeCategoria" id="nomeCategoria" value="<?=$dados["nomeCategoria"]?>" required>
</div>
    </div>

    <div class="mb-3">
    <button class="btn btn-success" type="submit"><i class="bi bi-floppy-fill"></i> Salvar</button>
    </div>
</form>
</div>