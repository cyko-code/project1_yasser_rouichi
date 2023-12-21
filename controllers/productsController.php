<?php
require_once 'models/ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function getAllProducts() {
        return $this->productModel->getAllProducts();
    }
}
?>
