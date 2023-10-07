<div class="container">

<h2>Lista de Clientes</h2>

<div class="mb-3">
    <a class="btn btn-secondary" href="index.php?menu=cad-clientes">Cadastrar novo Cliente</a>
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
            <th>Nome do Cliente</th>
            <th>Telefone do Cliente</th>
            <th>Email do Cliente</th>
            <th>Status</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
<tbody>
<?php

    $sql = "SELECT idCliente, nomeCliente, telefoneCliente, emailCliente, 

     CASE
            WHEN statusCliente = 0 THEN 'Ativo'
            WHEN statusCliente = 1 THEN 'Inativo'
        END
        as statusCliente
   FROM tbclientes
   where nomeCliente like '%{$txtPesquisa}%'";
    $rs = mysqli_query($conection, $sql);
    while ($dados = mysqli_fetch_assoc($rs)) {
    ?>
        <tr>
            <td><?= $dados["idCliente"] ?></td>
            <td><?= $dados["nomeCliente"] ?></td>
            <td><?= $dados["telefoneCliente"] ?></td>
            <td><?= $dados["emailCliente"] ?></td>
            <td><?= $dados["statusCliente"] ?></td>
            <td>
                <a class="btn btn-warning" href="index.php?menu=editar-clientes&idCliente=<?=$dados["idCliente"]?>">
                <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
                <a class="btn btn-danger" href="index.php?menu=excluir-clientes&idCliente=<?=$dados["idCliente"]?>">
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