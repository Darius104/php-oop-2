<?php
require_once __DIR__ . '/Product.php';

class Monitor extends Product{
    //override
    public $description = 'Monitor color blue \'LED\' con 144 GHz';
    
    public $size = 20;
    public $frequenza = 144;
    public $resolution = 'HD';
}

?>