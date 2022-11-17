<?php
declare(strict_types = 1);
namespace App\Models;
class UserModel{
    private string $id;
    private string $email;
    private string $password;
    private string $name;

    public function __construct($id, $email, $password, $name){
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
    }

    public function getId() { return $this->id; }
    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->password; }
    public function getName() { return $this->name; }

    public function setId($id) { $this->id = $id; }
    public function setEmail($email) { $this->email = $email;}
    public function setPassword($password) { $this->password = $password;}
    public function setName($name) { $this->name = $name;}

}