<?php
require_once('./Models/UserModel.php');
class UserService{
    public function login($email,$password){
        $query = "SELECT * from user where email = '$email' and password = '$password'";
        $rs = DB::getInstance()->query($query);
        if ($rs->num_rows>0){
            $user = $rs->fetch_assoc();
            $_SESSION['user'] = $user;
        }
    }
}