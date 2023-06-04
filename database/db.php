<?php

include_once __DIR__ . "/../models/product.php";
include_once __DIR__ . "/../models/category.php";
include_once __DIR__ . "/../models/food.php";


$prova = new Product(0, 'prodotto 1',
'https://picsum.photos/id/837/300/200',
[ new Category('cane') ] );

// $prova->setPrice(30);

var_dump($prova);

$arrayFood = [
    // Istanza Food 1
    $food2 = new Food(
        1,
        'Crocchette Premium',
        'https://picsum.photos/id/169/300/200',
        [new Category('cane')],
        'secco',
        200
    ),
    // Istanza Food 2
    $food2 = new Food(
        2,
        'Paté di Tonno',
        'https://picsum.photos/id/360/300/200',
        [new Category('gatto')],
        'umido',
        800
    ),

    // Istanza Food 3
    $food3 = new Food(
        3,
        'Snack al Pollo',
        'https://picsum.photos/id/802/300/200',
        [new Category('cane'), new Category('gatto')],
        'snack',
        1500
    ),
];

var_dump($arrayFood);

// uso la funzione della classe food per stabilire i prezzi di ogni istanza
foreach ($arrayFood as $elem) {
    $elem->setPrice();
};

var_dump($arrayFood);

?>