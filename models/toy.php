<?php

class Toy extends Product {
    public $material;
    public $dimension; // s, m , l , xl
    

    public function __construct($_id, $_name, $_img, $_category, $_material, $_dimension) {
        parent::__construct($_id, $_name, $_img, $_category);

        $this->material = $_material;
        $this->dimension = $_dimension;
    }

    public function setPrice() {
        if ($this->dimension == 's') {
            $this->price = 10;
        } else if ($this->dimension == 'm') {
            $this->price = 25;
        } else {
            $this->price = 50;
        }   
    }

}