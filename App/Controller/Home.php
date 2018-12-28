<?php

namespace App\Controller;

use App\Model\Product\ProductRepository;

class Home extends \App\Superclasses\Controller{
    private $product;
    
    public function __construct(ProductRepository $product) {
        parent::__construct();
        $this->product = $product;
    }
    
    public function index(){
        if (isset($_SESSION["user"])){
            if (count($this->product->getPreferences($_SESSION["user"])) > 0) {
                $this->view->set('products', $this->product->getPreferences($_SESSION["user"]));
            }else{
                $this->view->set('products', $this->product->getBestSellers());
            }
        }else{
            $this->view->set('products', $this->product->getBestSellers());
        }
        $this->view->render("principal");
    }
}
