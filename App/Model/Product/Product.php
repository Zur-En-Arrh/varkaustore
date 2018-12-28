<?php

namespace App\Model\Product;

class Product {
    private $id;
    private $nome;
    private $publicadora;
    private $genero;
    private $preco;
    private $foto;
    private $vendedor;
    private $quantidade;
    private $descricao;
    
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        if (empty($quantidade)) {
            throw new \InvalidArgumentException("Precisa preencher a quantidade");
        }else{
            $this->quantidade = $quantidade;
        }
    }

        
    public function getVendedor() {
        return $this->vendedor;
    }

    public function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPublicadora() {
        return $this->publicadora;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setId($id) {
        if(!is_int($id)){
            throw new \InvalidArgumentException("Id precisa ser inteiro");
        }
        $this->id = $id;
    }

    public function setNome($nome) {
        if (empty($nome)) {
            throw new \InvalidArgumentException("O nome precisa ser preenchido");
        }
        $this->nome = $nome;
    }

    public function setPublicadora($publicadora) {
        if (empty($publicadora)) {
            throw new \InvalidArgumentException("O nome da publicadora precisa ser preenchido");
        }
        $this->publicadora = $publicadora;
    }

    public function setGenero($genero) {
        if (empty($genero)) {
            throw new \InvalidArgumentException("O nome do gênero precisa ser preenchido");
        }
        $this->genero = $genero;
    }

    public function setPreco($preco) {
        if (!is_numeric($preco)) {
            throw new \InvalidArgumentException("O preço precisa ser do tipo float");
        }
        $this->preco = $preco;
    }

    public function setFoto($foto) {
        $validas = array(".jpg", ".png");
	    $extensao = strtolower(substr($foto["name"], -4));
        $newName = md5(time()).$extensao;
        
        if (empty($foto)) {
            throw new \InvalidArgumentException("O produto precisa ter uma foto");
        }elseif($extensao === $validas[0] || $extensao === $validas[1]){
                $dir = "../shopping/App/View/images/";
                move_uploaded_file($foto['tmp_name'], $dir.$newName);
		$this->foto = $newName;
            }
        
        
    }


}
