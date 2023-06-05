<?php

include_once __DIR__ . "/../models/dimension.php";
include_once __DIR__ . "/../models/product.php";
include_once __DIR__ . "/../models/category.php";
include_once __DIR__ . "/../models/food.php";
include_once __DIR__ . "/../models/toy.php";
include_once __DIR__ . "/../models/bed.php";


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
// var_dump($arrayFood);

// --- ARRAY TOYS ---
$arrayToy = [

    $toy1 = new Toy(
        0,
        'Palla Rimbalzante',
        'https://picsum.photos/id/659/300/200',
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
        'https://picsum.photos/id/433/300/200',
        [new Category('cane')],
        'plastica',
        'xl'
    ),
];
// var_dump($arrayToy);

// --- ARRAY CUCCE ---
$arrayBed = [
    $bed1 = new Bed(
        0,
        'Bed Memory Foam',
        'https://picsum.photos/id/176/300/200',
        [new Category('cane')],
        'marrone',
        'xl'
    ),
    
    $bed2 = new Bed(
        1,
        'Casetta per Gatti',
        'https://picsum.photos/id/177/300/200',
        [new Category('gatto')],
        'beige',
        's'
    ),
    
    $bed3 = new Bed(
        2,
        'Cuccia Rialzata',
        'https://picsum.photos/id/178/300/200',
        [new Category('cane')],
        'rosso',
        'm'
    ),
];
// var_dump($arrayBed);

// Creo un array contente tutti i prodotti
$arrayProducts = [];
array_push($arrayProducts, $arrayFood, $arrayToy, $arrayBed );


?>