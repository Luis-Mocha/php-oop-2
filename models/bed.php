<?php

class Bed extends Product {

    use Dimension; // s, m , l , xl
    public $color;
    // public $dimension;


    public function __construct($_id, $_name, $_img, $_category, $_color, $_dimension) {
        parent::__construct($_id, $_name, $_img, $_category);

        $this->color = $_color;
        $this->dimension = $_dimension;
    }

}