<?php

require_once __DIR__ . '/Product.php';

class Customer {

    public $email;
    public $address;

    // tutti i prodotti che l'utente ha intenzione di acquistare
    protected $cart = [];
    
    /**
     * __construct
     *
     * @param  string $email
     * @param  string $address
     */
    function __construct($email, $address) {
        $this->email = $email;
        $this->address = $address;
    }

    
    public function addToCart(Product $product) {
        $this->cart[] = $product;
    }
    

    public function getCartTotal() {
        $total = 0;
        
        foreach ($this->cart as $product) {
            $total += $product->price;
        }

        return round($total, 2) . ' €';
    }
}