<?php
namespace App\Controller;

use App\Model\Product\ProductRepositoryPDO;

class Games extends \App\Superclasses\Controller{
    private $product;
    
    public function __construct(ProductRepositoryPDO $product) {
        parent::__construct();
        $this->product = $product;
    }
    
    public function index(){
        if (!isset($_SESSION["user"]) || isset($_SESSION["admin"])) {
            $this->view->set("products", $this->product->getProducts("jogos"));
        }else{
            $this->view->set("products", $this->product->getPreferences($_SESSION["user"]));
        }
        
        $this->view->render("games");
    }
    
    public function update(){
        if (!($_POST["preco"] == '') && !($_POST["quantidade"] == '')) {
            $this->product->update($_POST["preco"], $_GET["id"], $_POST["quantidade"], $_POST["descricao"]);
            $this->index();
        }else{
            echo "<script>alert('Erro, campo(s) vazio');</script>";
            $this->display();
        }
    }
    
    public function delete(){
        $this->product->deleteProduct($_GET["id"]);
        $this->index();
    }
    
    public function filter(){
        $this->view->set("products", $this->product->getProductsGenre($_GET["genero"]));
        $this->view->render("games");
    }
    
    public function research(){
        $this->view->set("products", $this->product->getProductResearch($_POST["research"], $_POST["order"]));
        $this->view->render("games");
    }
    
    public function users(){
        $this->view->set("products", $this->product->getUsersProducts("jogos"));
        $this->view->render("games");
    }
    
    public function display(){
            $this->view->set("product", $this->product->getProduct($_GET["id"], "jogos"));
            $this->view->set("products", $this->product->getProductsGenreId($_GET["id"]));
            $this->view->render("display");
        
    }
    
    public function order(){
        $this->view->set("products", $this->product->getProductsOrderBy("jogos", $_POST["order"]));
        $this->view->render("games");
    }
    
    public function publisher(){
        $this->view->set("products", $this->product->getProductPublisher($_GET["pub"]));
        $this->view->render("games");
    }
    
    public function platform(){
        $this->view->set("products", $this->product->getProductsPlatform($_GET["platform"]));
        $this->view->render("games");
    }
}
