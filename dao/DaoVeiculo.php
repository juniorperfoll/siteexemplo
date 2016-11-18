<?php

require_once 'Conexao.php';

class DaoVeiculo {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoVeiculo();
        return self::$instance;
    }
   
    public function listar() {
        $sql = "SELECT veiculo.id,"
                . " veiculo.descricao,"
                . " veiculo.preco,"
                . " veiculo.imagem,"
                . " marca.descricao as marca"
                . " FROM veiculo, marca"
                . " WHERE veiculo.marca_id = marca.id "
                . " ORDER BY veiculo.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVeiculo($id) {
        $sql = "SELECT veiculo.id,"
                . " veiculo.descricao,"
                . " veiculo.preco,"
                . " veiculo.imagem,"
                . " marca.descricao as marca"
                . " FROM veiculo, marca"
                . " WHERE veiculo.marca_id = marca.id"
                . " AND veiculo.id =:id "
                . " ORDER BY veiculo.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getVeiculoMarca($id) {
        $sql = "SELECT veiculo.id,"
                . " veiculo.descricao,"
                . " veiculo.preco,"
                . " veiculo.imagem,"
                . " marca.descricao as marca"
                . " FROM veiculo, marca"
                . " WHERE veiculo.marca_id = marca.id"
                . " AND marca.id =:id "
                . " ORDER BY veiculo.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    

}
