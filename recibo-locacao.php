<?php
include("./db/conection.php");
$idCliente = $_GET["idCliente"];
$idLocacao = $_GET["idLocacao"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-recibo.css">
    <title>Recibo de Locação</title>
</head>

<body>
    <h1>Recibo de Locação</h1>
<div class="box-recibo">
    <table>
        <?php
            $sql = "SELECT 
            nomeCliente, 
            date_format(dataLocacao,'%d/%m/%Y') AS dataLocacao,
            CASE
                WHEN statusLocacao = 0 THEN 'Em aberto'
                WHEN statusLocacao = 1 THEN 'Finalizado'
                END
                AS statusLocacao
            FROM tbclientes AS c
            INNER JOIN tblocacao AS l
            ON c.idCliente = l.idCliente
            where idLocacao = {$idLocacao}";
            $rs = mysqli_query($conection,$sql);
            $dados = mysqli_fetch_assoc($rs);
        ?>
<tr>
    <th>Código da Locação:</th>
    <td><?=$idLocacao?></td>
    <th>Data da Locação:</th>
    <td><?=$dados["dataLocacao"]?></td>
</tr>
<tr>
    <th>Código do Cliente:</th>
    <td><?=$idCliente?></td>
    <th>Nome do Cliente:</th>
    <td><?=$dados["nomeCliente"]?></td>
</tr>
    </table>

    <table>

        <thead>
            <tr>
                <th>id Video</th>
                <th>Titulo Video</th>
                <th>Data de Entrega</th>
                <th>Status</th>
                <th>Valor da Locação</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT f.idFilme,f.tituloFilme,
    date_format(dataDeEntrega,'%d/%m/%Y') as dataDeEntrega, 
    CASE 
        WHEN statusItemLocado = 0 THEN 'Locado'
        WHEN statusItemLocado = 1 THEN 'Devolvido'
        WHEN statusItemLocado = 2 THEN 'Em atraso'
    END
    AS statusItemLocado,
    valorLocacao

        FROM tblocacao as loc 
                inner join tbitenslocados as iloc
                inner join tbfilmes as f on loc.idLocacao = iloc.idLocacao 
                and iloc.idFilme = f.idFilme
                WHERE loc.idLocacao = {$idLocacao}";

            $rs = mysqli_query($conection, $sql);
            while ($dados = mysqli_fetch_assoc($rs)) {

            ?>
                <tr>
                    <td><?= $dados["idFilme"] ?></td>
                    <td><?= $dados["tituloFilme"] ?></td>
                    <td><?= $dados["dataDeEntrega"] ?></td>
                    <td><?= $dados["statusItemLocado"] ?></td>
                    <td>R$ <?= $dados["valorLocacao"] ?></td>

                   
                </tr>
            <?php
            }
            ?>
           <tr>
            <?php
            $sql = "select sum(valorLocacao) as valorTotal from 
            tbitenslocados as i 
            inner join tbfilmes as f
            on i.idFilme = f.idFilme
             where idLocacao = $idLocacao";
             $rs = mysqli_query($conection,$sql);
             $dados = mysqli_fetch_assoc($rs);
            ?>
            <td colspan="4">Valor total</td>
            <td>R$ <?=$dados["valorTotal"]?></td>
           </tr> 
        </tbody>
    </table>
    </div>
</body>

</html>
