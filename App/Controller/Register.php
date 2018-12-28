<?php

namespace App\Controller;

class Register extends \App\Superclasses\Controller{
    private $user;
    
    public function __construct(\App\Model\User\UserPDO $user){
        parent::__construct();
        $this->user = $user;
    }
    
    public function cadastrar(){
        if($this->user->cadastrar($_POST)){
            $_SESSION["user"] = $_POST["username"];
            header("Location: index.php?page=home");
        }else{
            echo "<p> Erro no Cadastro </p>";
            header("Location: index.php?page=home#form-register");
        }
    }
}
