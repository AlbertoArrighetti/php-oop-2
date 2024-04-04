<?php

require_once __DIR__ . '/Customer.php';

class PremiumCustomer extends Customer {

    public $username;
    public $discount = 20;

    function __construct($email, $address, $username) {
        parent::__construct($email, $address);

        $this->username = $username;
    }

    public function getCartTotal() {
        $total = 0;

        foreach ($this->cart as $product) {
            $total += $product->price;
        }
        
        return round($total, 2) - round($total / 100 * $this->discount) . ' €';
    }
}