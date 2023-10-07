<div class="container">

<h2>Cadastro de nova categoria</h2>

<form action="index.php?menu=inserir-categorias" method="post">
    <div class="mb-3">
        <label class="form-label" for="nomeCategoria">Nome da Categoria</label>
        <div class="input-group">
        <div class="input-group-text">
            <i class="bi bi-tags"></i>
        </div>  
        <input class="form-control" type="text" name="nomeCategoria" id="nomeCategoria">    
</div>
    </div>

    <div class="mb-3">
    <button class="btn btn-success" type="submit"><i class="bi bi-floppy-fill"></i> Salvar</button>
    </div>
</form>
</div>