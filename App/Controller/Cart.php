<?php

namespace App\Controller;

use App\Model\Shopping\Cart as ICart;
use App\Model\Shopping\CartItem;
use App\Model\User\UserPDO;

class Cart extends \App\Superclasses\Controller{
    private $product;
    private $cart;
    private $user;
    
    public function __construct(\App\Model\Product\ProductRepositoryPDO $product, ICart $cart, UserPDO $user) {
        parent::__construct();
        $this->product = $product;
        $this->cart = $cart;
        $this->user = $user;
    }
    
    
    public function index(){
        $this->view->set('cartTotal', $this->cart->getTotal());
        $this->view->set("cartItem", $this->cart->getCartItems());
        $this->view->set("bestSellers", $this->product->getBestSellers());
        $this->view->render("cart");
        
    }
    
    public function add(){
        if (isset($_POST["id"]) && preg_match("/^[0-9]+/", $_POST["id"])) {
            $product = $this->product->getProduct($_POST["id"]);
            $cartItem = new CartItem($product, 1);
            $this->cart->add($cartItem);
        }
        header("Location: index.php?page=cart");
    }
    
    public function update(){
        if (isset($_POST["id"]) && preg_match("/^[0-9]+/", $_POST["id"])) {
            $product = $this->product->getProduct($_POST["id"], $_POST["tabela"]);
            $cartItem = new CartItem($product, $_POST["quantity"]);
            $this->cart->update($cartItem);
        }
        header("Location: index.php?page=cart");
    }
    
    public function delete(){
        if (isset($_GET["id"]) && preg_match("/^[0-9]+/", $_GET["id"])) {
            $this->cart->delete($_GET["id"]);
        }
        header("Location: index.php?page=cart");
    }
    
    public function finalizar(){
        if (isset($_SESSION["user"])) {
            $this->view->set('total', $this->cart->getTotal());
            $this->view->set('items', $this->cart->getCartItems());
            $this->view->set('user', $this->user->getUserUsername($_SESSION["user"]));
            $this->view->render("finalizar");
            $this->cart->buy();
            $this->product->setPreferences($_SESSION["user"]);
        }else{
           header("Location: index.php?page=home#form-register");
        }
    }
    
    public function testes(){
        $this->view->set("cartTotal", $this->cart->getTotal());
        $this->view->set("cartItems", $this->cart->getCartItems());
        $this->view->render("pagseguro");
    }
}
