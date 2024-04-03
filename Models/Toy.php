<?php

class Toy extends Product {
    
    public $material;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  int $_price
     * @param  bool $_precence
     * @param  string $_image
     * @param  array $_category
     * @param  string $_material
     */
    function __construct($_name, $_price,  $_precence,  $_image, array $_category, $_material) {
        
        parent::__construct($_name, $_price,  $_precence,  $_image, $_category);

        $this->material = $_material;
    }

    public function getIconProduct() {
        return '<i class="fa-solid fa-puzzle-piece"></i>';
    }
}