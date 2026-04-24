<?php

require_once 'ProductService.php';

$service = new ProductService();

echo $service->getProductDTO(1)->libelle;

echo $service->getProductDTO(1)->prix;