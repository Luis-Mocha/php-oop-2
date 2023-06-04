<?php

class Bed extends Product {
    public $color;
    public $dimension; // s, m , l , xl
    

    public function __construct($_id, $_name, $_img, $_category, $_color, $_dimension) {
        parent::__construct($_id, $_name, $_img, $_category);

        $this->color = $_color;
        $this->dimension = $_dimension;
    }

    public function setPrice() {
        if ($this->dimension == 's') {
            $this->price = 30;
        } else if ($this->dimension == 'm') {
            $this->price = 50;
        } else {
            $this->price = 100;
        }   
    }

}