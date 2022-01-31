<?php
require_once __DIR__ . '/classes/product.php';
require_once __DIR__ . '/classes/user.php';


$products = [
    new Product("iPad 2020", "Apple", "Tablet", 499),
    new Product("Apple Pencil", "Apple", "Accessories", 132),
    new Product("MacBook Air 2020", "Apple", "Notebook", 999),
    new Product("Fire HD 10", "Amazon", "Tablet", 150),
    new Product("Kindle Paperwhite", "Amazon", "Tablet", 140),
    new Product("Kindle Paperwhite Custodia", "Amazon", "Accessories", 30),

];
var_dump($products);
