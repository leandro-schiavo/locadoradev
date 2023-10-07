<div class="container">

<h2>Cadastro de novo Cliente</h2>

<form action="index.php?menu=inserir-clientes" method="post">
    
    <div class="mb-3">
        <label class="form-label" for="nomeCliente">Nome do Cliente</label>
        <div class="input-group">
        <div class="input-group-text">
            <i class="bi bi-person-square"></i>
        </div>
        <input class="form-control" type="text" name="nomeCliente" id="nomeCliente">
</div>
    </div>

    <div class="mb-3"> 
        <label class="form-" for="telefoneCliente">Telefone do Cliente</label>
        <div class="input-group">
        <div class="input-group-text">
        <i class="bi bi-telephone-fill"></i>
        </div>
        <input class="form-control" type="text" name="telefoneCliente" id="telefoneCliente" >
</div>
    </div>

    <div class="mb-3">
        <label class="form-" for="emailCliente">Email do Cliente</label>
        <div class="input-group">
        <div class="input-group-text">
        <i class="bi bi-envelope-at-fill"></i>
        </div>
        <input class="form-control" type="text" name="emailCliente" id="emailCliente" >
</div>
    </div>
    
    <div class="mb-3">
        <label class="form-" for="statusCliente">Status Cliente</label>
        <div class="input-group">
        <div class="input-group-text">
        <i class="bi bi-clipboard2-check-fill"></i>
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
