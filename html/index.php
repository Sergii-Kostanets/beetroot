<?php

require '../vendor/autoload.php';

use TestApp\Product;
use TestApp\ProductRepository;

foreach (range(1, 5) as $i){
    (new Product())
        ->setId($i)
        ->setName('Test' . $i)
        ->setPrice(123 * $i)
        ->save();
}

// echo '<pre>', var_dump($repository), '</pre>';

$product3 = Product::load(3);
$product3->setPrice(123);
$product3->save();

echo '<pre>', var_dump($product3->getName()), '</pre>';