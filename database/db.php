<?php

include_once __DIR__ . "/../models/product.php";
include_once __DIR__ . "/../models/category.php";


$prova = new Product(0, 'prodotto 1', 'https://images.unsplash.com/photo-1548767797-d8c844163c4c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80', [ new Category('cane') ] );

$prova->setPrice(30);

?>