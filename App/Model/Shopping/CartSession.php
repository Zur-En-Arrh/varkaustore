<?php

namespace App\Model\Shopping;

use App\Model\User\UserPDO;
use App\Model\Request\RequestPDO;

class CartSession implements Cart{
    private $items = [];
    private $user;
    private $request;
    
    public function __construct(\PDO $pdo){
        $this->items = $this->restore();
        $this->user = new UserPDO($pdo);
        $this->request = new RequestPDO($pdo);
    }
    
    public function restore(){
        return isset($_SESSION["cart"])? unserialize($_SESSION["cart"]) : array();
    }
    
    public function __destruct() {
        $_SESSION["cart"] = serialize($this->items);
    }
    
    public function add(CartItem $item) {
        $id = $item->getProduct()->getId();
        if (!isset($this->items[$id])) {
            $this->items[$id] = $item;
        }
    }

    public function delete($id) {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
    }

    public function getCartItems() {
        return $this->items;
    }

    public function getTotal() {
        $total = 0;
        foreach($this->items as $item){
            $total += $item->getSubtotal();
        }
        return $total;
    }

    public function update(CartItem $item) {
        $id = $item->getProduct()->getId();
        if (isset($this->items[$id])) {
            if($item->getQtde() == 0){
                $this->delete($id);
                return;
            }
            $this->items[$id] = $item;
        }
        
    }
    
    public function buy(){
        $total = $this->getTotal();
        $usuario = $this->user->getUserUsername($_SESSION["user"]);
        $items = $this->getCartItems();
        foreach ($items as $key => $value) {
            $dados["cliente"] = $usuario->getId();
            $dados["produto"] = $items[$key]->getProduct()->getId();
            $dados["qtde"] = $items[$key]->getQtde();
            $dados["precoTotal"] = $items[$key]->getSubtotal();
            $qtde = $items[$key]->getProduct()->getQuantidade() - $dados["qtde"];
            $this->request->inserirBase($dados);
        }
        
        
    }
}
