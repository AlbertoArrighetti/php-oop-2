<?php

// pesantezza 
trait Haviness {

    public $weight;

    public function getWeight() {
        return 'Peso oggetto: ' . $this->weight;
    }
}