<?php
declare(strict_types = 1);
namespace App\Service;
use App\DAO\UserDAO;
use App\Models\UserModel;

class UserService{
    private UserDAO $userDAO;
    public function __construct(){ 
        $this->userDAO = new UserDAO();
    }
    public function login($email,$password){
        return $this->userDAO->login($email,$password);
    }
}