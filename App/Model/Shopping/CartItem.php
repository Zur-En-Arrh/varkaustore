<?php

namespace App\Model\Shopping;

use App\Model\Product\Product;

class CartItem {
    private $product;
    private $qtde;
    
    public function __construct(Product $product, $qtde){
        $this->product = $product;
        $this->qtde = $qtde;
    }
    
    public function getProduct() {
        return $this->product;
    }

    public function getQtde() {
        return $this->qtde;
    }

    public function getSubtotal(){
        return $this->getProduct()->getPreco() * $this->getQtde();
    }
}
