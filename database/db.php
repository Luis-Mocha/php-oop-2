<?php

include_once __DIR__ . "/../models/product.php";
include_once __DIR__ . "/../models/category.php";
include_once __DIR__ . "/../models/food.php";
include_once __DIR__ . "/../models/toy.php";



// --- ARRAY CIBO ---
$arrayFood = [
    // Istanza Food 1
    $food1 = new Food(
        0,
        'Crocchette Premium',
        'https://picsum.photos/id/169/300/200',
        [new Category('cane')],
        'secco',
        200
    ),
    // Istanza Food 2
    $food2 = new Food(
        1,
        'Paté di Tonno',
        'https://picsum.photos/id/360/300/200',
        [new Category('gatto')],
        'umido',
        800
    ),

    // Istanza Food 3
    $food3 = new Food(
        2,
        'Snack al Pollo',
        'https://picsum.photos/id/802/300/200',
        [new Category('cane'), new Category('gatto')],
        'snack',
        1500
    ),
];

// uso la funzione della classe food per stabilire i prezzi di ogni istanza
foreach ($arrayFood as $elem) {
    $elem->setPrice();
};
// var_dump($arrayFood);


// --- ARRAY TOYS ---
$arrayToy = [

    $toy1 = new Toy(
        0,
        'Palla Rimbalzante',
        'https://picsum.photos/id/173/300/200',
        [new Category('cane'), new Category('gatto')],
        'gomma',
        'm'
    ),

    $toy2 = new Toy(
        1,
        'Giochino con Piume',
        'https://picsum.photos/id/174/300/200',
        [new Category('gatto')],
        'piume',
        's'
    ),

    $toy3 = new Toy(
        2,
        'Frisbee Resistente',
        'https://picsum.photos/id/175/300/200',
        [new Category('cane')],
        'plastica',
        'xl'
    ),
];

var_dump($arrayToy);
?>