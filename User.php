<?php

class User{
    public $name;
    public $lastname;
    public $email;
    public $age;

    public function __construct($_name, $_lastname, $_email, $_age){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->age = $_age;
    }
}

?>