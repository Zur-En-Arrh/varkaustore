<?php

namespace App\Model\Product;

use App\Model\Product\Product;

class ProductRepositoryPDO implements ProductRepository{
    private $pdo;
    
    public function __construct(\PDO $pdo){
        $this->pdo = $pdo;
    }
    
    public function setPreferences($username){
        $novo = str_replace(" ", "", $username);
        $stmt = $this->pdo->prepare("create or replace view 
            `usuario ".$novo."` as select genero, sum(qtde) as `total_comprado` "
                . "from jogos, itens_pedido "
                . "where id = produto and "
                . "cliente = (select id from usuarios where username = '".$username."') "
                . "group by(genero)");
        
        $stmt->execute();
    }
    
    public function update($preco, $id, $qtde, $descricao){
        $stmt = $this->pdo->prepare("UPDATE jogos SET preco = '$preco', descricao = '$descricao', quantidade = '$qtde' WHERE id = '$id'");
        $stmt->execute();
    }
    
    public function getProduct($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM jogos WHERE id = '$id'");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function getProductName($name){
        $stmt = $this->pdo->prepare("SELECT * FROM jogos WHERE nome = '$name'");
        $data = array();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetch();
    }
   
    public function deleteProduct($id){
        $stmt = $this->pdo->prepare("DELETE FROM jogos WHERE id = '$id'");
        $data = array();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
    }
    
    public function getBestSellers(){
        $stmt = $this->pdo->prepare("select * from vendidos order by total_vendas desc limit 6");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProducts($table, $vendedor = true) {
        if ($vendedor) {
            $stmt = $this->pdo->prepare("SELECT * FROM $table");
        }else{
            $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE vendedor = 'loja' order by nome");
        }
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getUsersProducts($table) {
        $stmt = $this->pdo->prepare("SELECT * FROM $table where vendedor != 'loja' order by nome desc");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProductsGenre($genre) {
        $stmt = $this->pdo->prepare("SELECT * FROM jogos WHERE genero = '$genre' order by publicadora");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProductResearch($query, $order) {
        $stmt = $this->pdo->prepare("SELECT * FROM jogos WHERE nome like '%$query%' order by $order asc");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function insertProduct(Product $product){
        $stmt = $this->pdo->prepare("INSERT INTO jogos(nome, publicadora, preco, genero, foto, vendedor, quantidade, descricao) VALUES('".$product->getNome()."', '".$product->getPublicadora()."', '".$product->getPreco()."',"
                . " '".$product->getGenero()."', '".$product->getFoto()."', '".$product->getVendedor()."', '".$product->getQuantidade()."', '".$product->getDescricao()."')");
        $stmt->execute();
    }

    public function getProductPublisher($pub) {
        $stmt = $this->pdo->prepare("SELECT * FROM jogos WHERE publicadora = '$pub' ");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getProductsGenreId($id){
        $stmt = $this->pdo->prepare("SELECT * FROM jogos WHERE genero = (select genero from jogos where id = '$id') and id <> '$id'");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getPreferences($user){
        $novo = str_replace(" ", "", $user);
        $stmt = $this->pdo->prepare("select * from jogos 
            where id in (select id from jogos where genero = 
            (select genero from `usuario ".$novo."` where total_comprado = 
            (select max(total_comprado) from `usuario ".$novo."`))) and id not in 
                (select id from jogos where id in (select produto from itens_pedido where cliente in 
                (select id from usuarios where username='".$user."')))");        
        
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getProductsPlatform($platform){
        $stmt = $this->pdo->prepare("SELECT * FROM jogos WHERE id in (select jogo from plataformas_jogos where plataforma = '$platform') order by nome desc");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Product\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function insertPlatform($platform, $id){
        $stmt = $this->pdo->prepare("INSERT INTO plataformas_jogos(plataforma, jogo) values('$platform', '$id')");
        $stmt->execute();
    }

}
