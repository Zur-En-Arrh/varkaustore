<?php

namespace App\Model\User;

interface UserInterface {
    public function getUsers();
    public function getUserUsername($name);
    public function getUserId($id);
}
