<?php
namespace NullObject;

class NullUser implements IUser {
    
    private $id;
    private $login;
    private $email;

    public function __construct() {}
    
    public function setId($id) {}
    public function getId() {
        return "Id is empty";
    }
    public function setLogin($login) {}
    public function getLogin() {
        return "Login is empty";
    }

    public function setEmail($email) {}
    public function getEmail() {
        return "Email is empty";
    }
}