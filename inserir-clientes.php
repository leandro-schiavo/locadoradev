<div class="container">

<h2>Inserir Cliente</h2>

<?php
$nomeCliente = $_POST["nomeCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$emailCliente = $_POST["emailCliente"];
$statusCliente = $_POST["statusCliente"];


$sql = "INSERT INTO tbclientes (
    nomeCliente, 
    telefoneCliente,
    emailCliente,
    statusCliente
    )
    VALUES(
    '$nomeCliente',
    '$telefoneCliente',
    '$emailCliente',
    '$statusCliente'
    )
    ";
    $rs = mysqli_query($conection,$sql);

    if($rs){
        echo "<p>Registo inserido com sucesso</p>";
    }else{
        echo "<p>Erro ao inserir</p>";
    }
    ?>
</div>
