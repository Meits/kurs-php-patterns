<?php

namespace NullObject;

interface IUser 
{
    public function getId();
    public function setId($id);
    public function setLogin($login);
    public function getLogin();

    public function setEmail($email);
    public function getEmail();

}