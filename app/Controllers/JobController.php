<?php
declare(strict_types = 1);

namespace App\Controllers;

use App\View;
use App\Service\UserService;

class JobController
{   
    protected  UserService $userService;
    public function __construct(){
        $this->userService = new UserService();
    }
    public function index(): View
    {
        return View::make('SearchJob/index');
    }
    
}