<?php
declare(strict_types = 1);

namespace App;

use mysqli;

class DB
{
    private static mysqli $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)){
            try {
                self::$instance = mysqli_connect('localhost','root','','IT_JOB');
                return self::$instance;
            } catch (\Exception $e) {
               
            }

        }
    }

    // public function __call(string $name, array $arguments)
    // {
    //     return call_user_func_array([$this->pdo, $name], $arguments);
    // }
}