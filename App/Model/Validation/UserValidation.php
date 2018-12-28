<?php

namespace App\Model\Validation;

interface UserValidation {
    public function nome($nome);
    public function username($username);
    public function senha($senha);
    public function email($email);
}
