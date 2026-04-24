<?php

require_once '../repository/ProductRepository.php';

class ProductService {
    private $repo;

    public function __construct() {
        $this->repo = new ProductRepository();
    }

    public function getPrixTTC($id) {
        $product = $this->repo->findById($id);

        if (!$product) {
            return null;
        }

            return $product->prix * 1.2;
    }
}