<?php
declare(strict_types = 1);

namespace App\Controllers;

use App\View;
use App\Service\UserService;

class LoginController
{
    public function index(): View
    {
        
        return View::make('Login/index');
    }
    public function login(){
        $user = (new UserService)->login($_POST['email'], $_POST['password']);
        if ($user != null){
            var_dump($user);
        }
        else{
            
            return View::make('Login/index',['error'=>"Đăng nhập không thành công"]);
        }
    }
}