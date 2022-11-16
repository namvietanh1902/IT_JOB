<?php
declare(strict_types = 1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {
        $data="Alo";
        return View::make('Homepage/index',compact('data'));
    }
    
}