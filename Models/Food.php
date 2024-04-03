<?php

class Food extends Product {
    
    public $weight;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  int $_price
     * @param  bool $_precence
     * @param  string $_image
     * @param  array $_category
     * @param  string $_weight
     */
    function __construct($_name, $_price,  $_precence,  $_image, array $_category, $_weight) {
        
        parent::__construct($_name, $_price,  $_precence,  $_image, $_category);

        $this->weight = $_weight;
    }
}