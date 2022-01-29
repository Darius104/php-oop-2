<?php
require_once __DIR__ . '/Product.php';

class Keyboard extends Product{
    //override
    public $description = 'Tastiera colore RGB layout americano';

    public $layout = 'American';
    public $led = 'RGB';

    //override
    public function __construct($_name, $_price, $_layout){
        parent::__construct($_name, $_price);
        $this->layout = $_layout;

    }
}

?>