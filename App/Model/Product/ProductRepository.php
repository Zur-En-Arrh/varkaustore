<?php

namespace App\Model\Product;

interface ProductRepository {
    public function getProducts($table);
    public function getProduct($id);
    public function getProductsGenre($genre);
    public function getProductResearch($query, $order);
    public function getProductPublisher($pub);
}
