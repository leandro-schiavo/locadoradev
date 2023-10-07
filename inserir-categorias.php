<div class="container">

<h2>Inserir Categoria</h2>
<?php
$nomeCategoria = $_POST["nomeCategoria"];


$sql = "INSERT INTO tbcategorias (
    nomeCategoria
    )
    VALUES(
    '$nomeCategoria'
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