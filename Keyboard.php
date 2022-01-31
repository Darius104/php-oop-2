<?php
require_once __DIR__ . '/Product.php';

class Keyboard extends Product{
    //override
    public $description = 'Tastiera colore RGB layout americano';

    public $layout = 'American';
    public $led = 'RGB';
    public $new = 'colore nero ora rosso';

    //override
    public function __construct($_name, $_price, $_layout, $_new){
        parent::__construct($_name, $_price);
        $this->layout = $_layout;
        $this->new = $_new;

    }
}

?>