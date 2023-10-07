<div class="container">

<h2>Excluir Vídeos</h2>

<?php
$idFilme = $_GET["idFilme"];
$sql = "delete from tbfilmes where idFilme = '{$idFilme}'";
$rs = mysqli_query($conection,$sql);

echo "<p>Registro excluido com sucesso!</p>";

?>
</div>