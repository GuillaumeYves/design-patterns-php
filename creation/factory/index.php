<?php
require_once '../common/Product.php';
class ProductFactory {
    public static function create($type) {
        switch ($type) {
            case "book":
                return new Product(1, "Livre", 10);
            case "phone":
                return new Product(2, "Téléphone", 500);
            default:
                throw new Exception("Type inconnu");
        }
    }
}

$product = ProductFactory::create("book");
print_r($product);
