<?php

class Product {
    public $name;
    public $price;
    public $precence;
    public $image;

    public $category;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  int $_price
     * @param  bool $_precence
     * @param  string $_image
     * @param  array $_category
     */
    public function __construct($_name, $_price,  $_precence,  $_image, array $_category ) {
        $this->name = $_name;
        $this->price = $_price;
        $this->precence = $_precence;
        $this->image = $_image;

        $this->category = $_category;
    }


}