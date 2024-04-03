<?php

class Category {

    public $type;
    public $icon;
    
    /**
     * __construct
     *
     * @param  string $_type
     * @param  string $_icon
     */
    public function __construct($_type, $_icon) {
        $this->type = $_type;
        $this->icon = $_icon;
    }
}