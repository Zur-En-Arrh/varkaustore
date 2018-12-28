<?php

namespace App\Controller;

use App\Model\User\UserPDO;

class Login extends \App\Superclasses\Controller{
    private $user;
    
    public function __construct(UserPDO $user) {
        parent::__construct();
        $this->user = $user;
    }
    
    public function index(){
        $this->view->render("login");
    }
    
    public function logar(){
        if($this->user->logar($_POST)){
            $_SESSION["user"] = $_POST["username"];
            if ($this->user->findAdmin($_POST["username"])) {
                $_SESSION["admin"] = true;
            }else{
                if (isset($_SESSION["admin"])) {
                    unset($_SESSION["admin"]);
                }
            }
            if (isset($_SESSION["login"])) {
                unset($_SESSION["login"]);
            }
            header("Location: index.php?page=home");
        }else{
            $_SESSION["login"] = true;
            header("Location: index.php?page=home");
        }
    }
    
    public function deslogar(){
        if (isset($_SESSION["user"])) {
            unset($_SESSION["user"]);
            if (isset($_SESSION["admin"])) {
                unset($_SESSION["admin"]);
            }
            header("Location: index.php?page=home");
        }
    }
}
