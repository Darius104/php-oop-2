<?php
require_once __DIR__ . '/Product.php';

class Monitor extends Product{
    //override
    public $description = 'Monitor color blue \'LED\' con 144 GHz';

    public $size;
    public $frequenza = 144;
    public $resolution = 'HD';

    //override
    public function __construct($_name, $_price, $_size){
        parent::__construct($_name, $_price);
        $this->size = $_size;
    }
}

?>