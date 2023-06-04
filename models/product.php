<?php

class Product {
    public $id;
    public $name;
    public $img;
    public $category;
    protected $price;
    protected $discount;

    public function __construct($_id, $_name, $_img, $_category) {
        $this->id = $_id;
        $this->name = $_name;
        $this->img = $_img;
        $this->category = $_category;
    }

    public function setPrice($_price) {
        $this->price = $_price;
    }

}