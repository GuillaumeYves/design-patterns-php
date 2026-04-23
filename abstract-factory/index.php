<?php
require_once '../common/Product.php';

interface ProductFactoryInterface {
    public function createProduct();
}

class FrenchFactory implements ProductFactoryInterface {
    public function createProduct() {
        return new Product(1, "Livre FR", 10);
    }
}

class USFactory implements ProductFactoryInterface {
    public function createProduct() {
        return new Product(2, "Book US", 12);
    }
}

$factory = new FrenchFactory();
$product = $factory->createProduct();
print_r($product);
