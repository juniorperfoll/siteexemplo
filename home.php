<?php
require_once 'dao/DaoVeiculo.php';
$DaoVeiculo = DaoVeiculo::getInstance();
$dadosVeiculos = $DaoVeiculo->listarHome();
?>
<h2>Nossos Destaques</h2>
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

