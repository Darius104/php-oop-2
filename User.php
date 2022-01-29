<?php

class User{
    public $name;
    public $lastname;
    public $email;
    public $age;
    protected $cart = [];

    public function __construct($_name, $_lastname, $_email, $_age){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->age = $_age;
    }

    public function getFullName(){
        $fullname = $this->name . ' ' . $this->lastname;
        return $fullname;
    }

    public function addProduct($product){
        $this->$cart[] = $product;
    }

    public function getCart(){
        return $this->cart;
    }
}

?>