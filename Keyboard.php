<?php
require_once __DIR__ . '/Product.php';

class Keyboard extends Product{
    //override
    public $description = 'Tastiera colore RGB layout americano';

    public $layout = 'American';
    public $led = 'RGB';
}

?>