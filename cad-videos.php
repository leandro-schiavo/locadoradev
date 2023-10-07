<div class="container">

<h2>Cadastro de Vídeos</h2>

<form action="index.php?menu=inserir-videos" method="post">
    <div class="mb-3">
        <label class="form-label text-light" for="tituloFilme">Título do Vídeo</label>
        <div class="input-group">
        <div class="input-group-text">
            <i class="bi bi-film"></i>
        </div>
        <input class="form-control" type="text" name="tituloFilme" id="tituloFilme" required>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-light" for="duracaoFilme">Duração do Vídeo</label>
        <div class="input-group">
        <div class="input-group-text">
            <i class="bi bi-clock"></i>
        </div>
        <input class="form-control" type="text" name="duracaoFilme" id="duracaoFilme" required>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-light" for="valorLocacao">Valor da Locação</label>
        <div class="input-group">
        <div class="input-group-text">
            <i class="bi bi-cash-coin"></i>
        </div>
        <input class="form-control" type="text" name="valorLocacao" id="valorLocacao" required>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-light" for="idCategoria">Categoria</label>
        <div class="input-group">
        <div class="input-group-text">
            <i class="bi bi-tags"></i>
        </div>  
        <select class="form-select" name="idCategoria" id="idCategoria" required>
            <option value="">Selecione a categoria</option>
            <?php
            $sql = "SELECT * FROM tbcategorias order by nomeCategoria ASC";
            $rs = mysqli_query($conection, $sql);
            while ($dados = mysqli_fetch_assoc($rs)) {

                ?>
                <option value="<?= $dados["idCategoria"] ?>">
            <?= $dados["nomeCategoria"] ?>
        </option>
        <?php
            }
            ?>
        </select>
        </div>
       
    </div>
    <div class="mb-3">
        <button class="btn btn-success" type="submit"><i class="bi bi-floppy-fill"></i> Salvar</button>
    </div>
</form>
</div>