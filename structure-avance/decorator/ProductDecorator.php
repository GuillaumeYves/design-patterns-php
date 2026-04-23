<?php
require_once '../common/product.php';

class ProductDecorator {
    public $product;

    public function __construct( Product $product) {
        $this->product =$product;

    }

    public function getInfo(): string {
        return $this->product->getInfo();
    }
}