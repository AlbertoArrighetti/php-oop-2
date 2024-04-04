<?php

require_once __DIR__ . './Traits/Heaviness.php';
class Food extends Product {
    
    use Haviness;
    
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

    public function getIconProduct() {
        return '<i class="fa-solid fa-bowl-food"></i>';
    }
}