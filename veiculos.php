<?php
require_once 'dao/DaoVeiculo.php';
$DaoVeiculo = DaoVeiculo::getInstance();
if (isset($_GET["marca"])) {
    $marca = $_GET["marca"];
    $dadosVeiculos = $DaoVeiculo->getVeiculoMarca($marca);
} else {
    $dadosVeiculos = $DaoVeiculo->listar();
}
?>
<h2>Veículos</h2>
<?php
foreach ($dadosVeiculos as $rowVeiculo) {
    ?>
    <div class="img">
        <a href="?pg=detalhes&id=<?=$rowVeiculo["id"]?>">
            <img src="http://127.0.0.1/crud/fotos/<?=$rowVeiculo["imagem"]?>" alt="<?=$rowVeiculo["descricao"]?>" width="300" height="200">
        </a>
        <div class="desc"><?=$rowVeiculo["descricao"]?></div>
        <div class="desc"><?=$rowVeiculo["marca"]?></div>
        <div class="desc">R$ <?=$rowVeiculo["preco"]?></div>
    </div>

    <?php
}
?>

