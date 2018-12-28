<?php

namespace App\Model\Request;

use App\Model\Request\RequestPDO;

class RequestPDO implements RequestInterface{
    private $pdo;
    
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function inserirBase(array $dados) {
        $stmt = $this->pdo->prepare("INSERT INTO itens_pedido(cliente, produto, qtde, precoTotal, data_compra) VALUES(:cliente, :produto, :qtde, :precoTotal, DEFAULT)");
        
        $stmt->bindParam(':cliente', $dados["cliente"]);
        $stmt->bindParam(':produto', $dados["produto"]);
        $stmt->bindParam(':qtde', $dados["qtde"]);
        $stmt->bindParam(':precoTotal', $dados["precoTotal"]);
        
        $stmt->execute();
    }
}
