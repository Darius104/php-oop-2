<?php
require_once __DIR__ . '/Product.php';

class Monitor extends Product{
    //override
    public $description = 'Monitor color blue \'LED\' con 144 GHz';

    public $size;
    public $frequenza = 144;
    public $resolution = 'HD';
    public $new;

    //override
    public function __construct($_name, $_price, $_size, $_new){
        parent::__construct($_name, $_price);
        $this->size = $_size;
        
        //se la variabile new è una stringa (true)
        if(is_string($_new)){
           $this->new = $_new; 
        } else {
            //altrimenti
            throw new Exception('Non è una stringa');
        }
    }
}

?>