<div class="container">

<h2>Lista de Vídeos</h2>

<div class="mb-3">
    <a class="btn btn-secondary" href="index.php?menu=cad-videos">Cadastrar novo vídeo</a>
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
            <th>Titulo</th>
            <th>Duração do Filme</th>
            <th>Valor da Locação</th>
            <th>Categoria</th>
            <th>Status</th>
            <th class="ph-duotone ph-pencil-simple">Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT f.idFilme,tituloFilme, duracaoFilme,valorLocacao,nomeCategoria,
        CASE
            WHEN statusFilme = 0 THEN 'Disponivel'
            WHEN statusFilme = 1 THEN 'Locado'
            WHEN statusFilme = 2 THEN 'Indisponivel'
        END
        as statusLocacao
        FROM
        tbfilmes as f left join
        tbcategorias as c on f.idCategoria = c.idCategoria
        where tituloFilme like '%{$txtPesquisa}%'
            order by tituloFilme";
        $rs = mysqli_query($conection, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?= $dados["idFilme"] ?></td>
                <td><?= $dados["tituloFilme"] ?></td>
                <td><?= $dados["duracaoFilme"] ?></td>
                <td><?= $dados["valorLocacao"] ?></td>
                <td><?= $dados["nomeCategoria"] ?></td>
                <td><?= $dados["statusLocacao"] ?></td>
                <td>
                    <a class="btn btn-warning" href="index.php?menu=editar-videos&idFilme=<?=$dados["idFilme"]?>">
                    <i class="bi bi-pencil-square"></i>
                        </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="index.php?menu=excluir-videos&idFilme=<?=$dados["idFilme"]?>">
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