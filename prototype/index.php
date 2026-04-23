<?php
require_once '../common/Product.php';

class ProductPrototype extends Product {
    public function __clone() {}
}

$prototype = new ProductPrototype(1, "Livre", 10);

$product2 = clone $prototype;
$product2->id = 2;

print_r($prototype);
print_r($product2);
