<?php
declare(strict_types = 1);

namespace App\Controllers;

use App\View;

class LoginController
{
    public function index(): View
    {
        
        return View::make('Login/index');
    }
    public function login()
    {
        print_r($_POST);
    }
}