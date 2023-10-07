<div class="container">

<h2>Excluir Clientes</h2>

<?php
$idCliente = $_GET["idCliente"];
$sql = "delete from tbclientes where idCliente = '{$idCliente}'";
$rs = mysqli_query($conection,$sql);

echo "<p>Registro excluido com sucesso!</p>";

?>
</div>