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
    public function __construct($_name, $_price,  $_precence = true,  $_image, array $_category ) {
        $this->name = $_name;
        $this->precence = $_precence;
        $this->image = $_image;

        $this->category = $_category;

        if (is_numeric($_price)) {
            $this->price = $_price;
        } else {
            throw new Exception("Perfavore inserire un prezzo per l'oggetto.");
            
        }
    }


    public function getIconProduct() {
        return '<i class="fa-solid fa-tag"></i>';
    }

    public function getPrice() {
        return "€ " . $this->price ;
    }



}