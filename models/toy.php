<?php

class Toy extends Product {

    use Dimension; // s, m , l , xl
    public $material;
    // public $dimension;


    public function __construct($_id, $_name, $_img, $_category, $_material, $_dimension) {
        parent::__construct($_id, $_name, $_img, $_category);

        $this->material = $_material;
        $this->dimension = $_dimension;
    }

}