<?php

class Product {
    public $id;
    public $name;
    public $img;
    public $category;
    public $price;
    protected $discount;

    public function __construct($_id, $_name, $_img, $_category) {
        $this->id = $_id;
        $this->name = $_name;
        $this->img = $_img;
        $this->category = $_category;
    }

    public function setPrice(){
        if (get_class($this) === 'Toy') {
            if ($this->dimension == 's') {
                $this->price = 10;
            } else if ($this->dimension == 'm') {
                $this->price = 25;
            } else {
                $this->price = 50;
            } 
        } else if (get_class($this) === 'Bed') {
            if ($this->dimension == 's') {
                $this->price = 30;
            } else if ($this->dimension == 'm') {
                $this->price = 50;
            } else {
                $this->price = 100;
            } 
        } else {
            if ($this->quantity <= 200) {
                $this->price = 2;
            } else if ($this->quantity > 200 && $this->quantity <= 1000) {
                $this->price = 5;
            } else {
                $this->price = 10;
            }  
        }
        
    }

}