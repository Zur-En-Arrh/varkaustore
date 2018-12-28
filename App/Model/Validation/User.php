<?php

namespace App\Model\Validation;

use App\Model\Validation\UserValidation;

class User implements UserValidation{
    private $nome;
    private $email;
    private $senha;
    private $username;
    
    public function email($email) {
        if (isset($email)) {
            if (!preg_match("^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+.([a-zA-Z]{2,4})$^", $email)) {
                $this->email = true;
            }else{
                $this->email = false;
            }
        }else{
            $this->email = false;
        }
        return $this->email;
    }

    public function nome($nome) {
        if (!(isset($nome) && strlen($nome) > 2)) {
            if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/", $nome)) {
                $this->nome = true;
            }else{
                $this->nome = false;
            }
        }else{
            $this->nome = false;
        }
        return $this->nome;
    }

    public function senha($senha) {
        if (empty($senha)) {
            $this->senha = true;
        }else{
            $this->senha = false;
        }
        return $this->senha;
    }

    public function username($username) {
        if (empty($username)) {
            $this->username = true;
        }else{
            $this->username = false;
        }
        return $this->username;
    }

}
