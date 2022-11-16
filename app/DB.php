<?php

declare(strict_types = 1);

namespace App;

use mysqli;

class DB
{
    private mysqli $db;

    public function __construct()
    {

        try {
            $this->db = mysqli_connect('localhost','root','','IT_JOB');
        } catch (\Exception $e) {
           
        }
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->pdo, $name], $arguments);
    }
}