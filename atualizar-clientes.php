<div class="container">

<h2>Atualizar Cliente</h2>
<?php
$idCliente = $_POST["idCliente"];
$nomeCliente = $_POST["nomeCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$emailCliente = $_POST["emailCliente"];
$statusCliente = $_POST["statusCliente"];

$sql = "update tbclientes set
nomeCliente ='{$nomeCliente}',
telefoneCliente ='{$telefoneCliente}',
emailCliente ='{$emailCliente}',
statusCliente ='{$statusCliente}'
where idCliente = '{$idCliente}'
";
$rs = mysqli_query($conection,$sql);
echo "<p>Registro atualizado com sucesso!</p>";
?>
</div>