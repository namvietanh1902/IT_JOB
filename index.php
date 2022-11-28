<?php

declare(strict_types = 1);

use App\App;
use App\Config;
use App\Router;
use App\Controllers\JobController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;

session_start();
require_once __DIR__ . '/autoload.php';


define('VIEW_PATH', __DIR__ . '/views/IT_JOB');

$router = new Router();
$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/login',[LoginController::class, 'index'])
    ->post('/login',[LoginController::class,'login'])
    ->get('/searchJob',[JobController::class, 'index']);

(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
))->run();