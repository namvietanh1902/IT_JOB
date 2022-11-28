<?php
declare(strict_types = 1);
namespace App\DAO;
use App\Models\UserModel;

class UserDAO{
    public function login($email,$password){
        $db = DB::getInstance();
        $query = "SELECT * from user where email = '$email' and password = '$password'";
        $rs =$db->query($query);
        if ($rs->num_rows>0){
            $user = $rs->fetch_assoc();
            return new UserModel($user['id'],$user['email'],$user['password'],$user['name']);
        }
        return null;
    }
}