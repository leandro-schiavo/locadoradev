<div class="container">

<h2>Lista de Categorias</h2>

<div class="mb-3">
    <a class="btn btn-secondary" href="index.php?menu=cad-categorias">Cadastrar nova Categoria</a>
</div>
<div class="mb-3">
    <?php
    if (isset($_POST["txtPesquisa"])) {
        $txtPesquisa = $_POST["txtPesquisa"];
    } else {
        $txtPesquisa = "";
    }
    ?>

    <form action="" method="post">
        <div class="input-group">
            <div class="input-group-text">
                Pesquisar
            </div>
               <input class="form-control" type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button class="btn btn-success" type="submit">
            <i class="bi bi-search"></i>
        </button>
        </div>
    </form>
</div>
<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Nome da Categoria</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
<tbody>
<?php
    $sql = "SELECT * FROM tbcategorias
    where nomeCategoria like '%{$txtPesquisa}%'";
    $rs = mysqli_query($conection, $sql);
    while ($dados = mysqli_fetch_assoc($rs)) {
    ?>
        <tr>
            <td><?= $dados["idCategoria"] ?></td>
            <td><?= $dados["nomeCategoria"] ?></td>
            <td>
                <a class="btn btn-warning" href="index.php?menu=editar-categorias&idCategoria=<?=$dados["idCategoria"]?>">
                <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
            <a class="btn btn-danger" href="index.php?menu=excluir-categorias&idCategoria=<?=$dados["idCategoria"]?>">
            <i class="bi bi-trash3-fill"></i>
                </a>
            </td>
        </tr>
    <?php
    }
    ?>
</tbody>
</table>
</div>