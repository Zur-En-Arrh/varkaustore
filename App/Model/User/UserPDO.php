<?php

namespace App\Model\User;

class UserPDO implements \App\Model\User\UserInterface{
    private $pdo;
    private $validation;
    
    public function __construct(\PDO $pdo){
        $this->pdo = $pdo;
        $this->validation = new \App\Model\Validation\User();
    }

    public function getUserUsername($name) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE username = :username");
        $stmt->bindValue(":username", $name, \PDO::PARAM_STR);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\User\User");
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function getUserId($id){
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\User\User");
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function findAdmin($username){
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE username = :username");
        $stmt->bindValue(":username", $username, \PDO::PARAM_STR);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\User\User");
        $stmt->execute();
        $user = $stmt->fetch();
        return $user->getAdmin();
    }

    public function getUsers() {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\User\User");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function cadastrar(array $dados){
            $cont = 0;
        foreach ($dados as $key => $value) {
            if(!$this->validation->$key(trim($value))){
                $cont++;
                if (isset($_SESSION["erros"][$key])) {
                    unset($_SESSION["erros"][$key]);
                }
            }else{
                $_SESSION["erros"][$key] = "ERRO, campo $key está preenchido inadequadamente!";
            }
        }
        if ($cont == 4) {
            $stmt = $this->pdo->prepare("INSERT INTO usuarios(nome, username, email, senha) values('".$dados["nome"]."', '".$dados["username"]."', '".$dados["email"]."', '".md5($dados["senha"])."')");
            $stmt->execute();
            unset($_SESSION["erros"]);
            return true;
            $cont = 0;
        }else{
            echo "<script> alert('ERRO NO CADASTRO'); </script>";
            return false;
            $cont = 0;
        }
    }
    
    public function logar(array $dados){
        $stmt = $this->pdo->prepare("SELECT username FROM usuarios WHERE username='".$dados["username"]."' and senha='".md5($dados["senha"])."'");
        $stmt->execute();
        $fetch = $stmt->fetch();
        
        if ($fetch) {
            return true;
        }else{
            return false;
        }
    }
}
