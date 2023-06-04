<?php

class Food extends Product {
    public $type; //secco o umido
    public $quantity; //qunatità definita in grammi
    

    public function __construct($_id, $_name, $_img, $_category, $_type, $_quantity) {
        parent::__construct($_id, $_name, $_img, $_category);

        $this->type = $_type;
        $this->quantity = $_quantity;
    }

    

}