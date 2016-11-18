<?php
require_once 'dao/DaoVeiculo.php';
$DaoVeiculo = DaoVeiculo::getInstance();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $rowVeiculo = $DaoVeiculo->getVeiculo($id);
}
?>
<h2>Detalhes do Veículo</h2>
<div style="float: left;">    
    <img src="http://127.0.0.1/crud/fotos/<?= $rowVeiculo["imagem"] ?>" alt="<?= $rowVeiculo["descricao"] ?>" width="400" height="300">
</div>   
<div style="float: left;text-align: center;padding: 10px;">
    <h3><?= $rowVeiculo["descricao"] ?></h3>
    <div ><?= $rowVeiculo["marca"] ?></div>
    <div>R$ <?= $rowVeiculo["preco"] ?></div>
</div>


