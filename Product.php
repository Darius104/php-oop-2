<?php
require_once __DIR__ . '/News.php';

class Product{
    use News;

    public $name;
    public $price;
    public $description = 'Product';

    public function __construct($_name, $_price){
        $this->name = $_name;
        $this->price = $_price;
    }
}

?>