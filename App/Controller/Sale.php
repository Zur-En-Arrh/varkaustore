<?php

namespace App\Controller;

use App\Superclasses\Controller;

use App\Model\Product\Product;

use App\Model\Product\ProductRepositoryPDO;

class Sale extends Controller{
    private $product;
    private $pdo;
    
    public function __construct(ProductRepositoryPDO $pdo) {
        parent::__construct();
        $this->product = new Product();
        $this->pdo = $pdo;
    }
    
    public function index(){
        $this->view->render("sale");
    }
    
    public function vender(){
        $this->product->setFoto($_FILES["foto"]);
        $this->product->setGenero($_POST["genero"]);
        $this->product->setNome($_POST["nome"]);
        $this->product->setPreco($_POST["preco"]);
        $this->product->setPublicadora($_POST["publicadora"]);
        $this->product->setQuantidade($_POST["qtde"]);
        $this->product->setDescricao($_POST["descricao"]);
        
        $plataformas = array("XboxOne", "PS4", "PS3", "PC", "Xbox360", "Switch", "WiiU");
        
        
        
        if (isset($_SESSION["admin"])) {
            $this->product->setVendedor('loja');
        }else{
            $this->product->setVendedor($_SESSION["user"]);
        }
        
        $this->pdo->insertProduct($this->product);
        
        foreach($plataformas as $p){
            if (isset($_POST[$p])) {
               $product = $this->pdo->getProductName($_POST["nome"]);
               $this->pdo->insertPlatform($_POST[$p], $product->getId());
            }
        }
        
        header("Location: index.php?page=home");
    }
    
    
}
