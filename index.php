<?php
require_once 'dao/DaoMarca.php';
$DaoMarca = DaoMarca::getInstance();
$dadosMarcas = $DaoMarca->listar();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Garagem de Veículos</title>
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">        
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <p>This is the Header</p>
            </div>
            <div id="navigation">
                <ul>
                    <li><a href="?pg=home">Home</a></li>
                    <li><a href="?pg=sobre">Sobre</a></li>
                    <li class="dropdown">
                        <a href="?pg=marcas" class="dropbtn">Marcas</a>
                        <div class="dropdown-content">
                            <?php
                                foreach ($dadosMarcas as $rowMarca) {
                                    echo "<a href='?pg=veiculos&marca={$rowMarca["id"]}'>{$rowMarca["descricao"]}</a>";
                                }
                            ?>
                        </div>
                    </li>
                    <li><a href="?pg=veiculos">Veículos</a></li>
                    <li><a href="?pg=contato">Contato</a></li>
                </ul>
            </div>
            <div id="banner">
                <div class="w3-content w3-display-container" style="max-width:1000px">
                    <img class="mySlides" src="img/banner1.jpg" style="width:100%">
                    <img class="mySlides" src="img/banner2.jpg" style="width:100%">
                    <img class="mySlides" src="img/banner3.jpg" style="width:100%">
                </div>
            </div>
            <div id="contentliquid"><div id="content">
                    <?php
                        @$pg = $_GET["pg"];
                        if (isset($pg)) {
                            include_once $pg . '.php';
                        } else {
                            include_once 'home.php';
                        }
                        ?>
                </div></div>
            <div id="rightcolumn">
                Banner Comercial
            </div>
            <div id="footer">
                <p>This is the Footer</p>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/slider.js"></script>
</html>
