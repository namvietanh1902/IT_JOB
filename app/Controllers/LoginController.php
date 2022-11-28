<?php
declare(strict_types = 1);

namespace App\Controllers;

use App\View;
use App\Service\UserService;

class LoginController
{   
    protected  UserService $userService;
    public function __construct(){
        $this->userService = new UserService();
    }
    public function index(): View
    {
        
        return View::make('Login/index');
    }
    public function login(){
        $user = $this->userService->login($_POST['email'], $_POST['password']);
        if ($user != null){
            $_SESSION['user'] = $user->getName(); 
           
            header('Location: ./searchJob');
        }
        else{
            
            return View::make('Login/index',['error'=>"Đăng nhập không thành công"]);
        }
    }
}